--
-- PostgreSQL database dump
--

\restrict QhtjenyMff6O2UL3HQp2CqVLM5IUmBwpiDD2NdteDwyVSmrCRSiIhgusD65q5Gz

-- Dumped from database version 18.4
-- Dumped by pg_dump version 18.4

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET transaction_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: tipe_depresiasi; Type: TYPE; Schema: public; Owner: ballack
--

CREATE TYPE public.tipe_depresiasi AS ENUM (
    'straight_line',
    'decline_balance'
);


ALTER TYPE public.tipe_depresiasi OWNER TO ballack;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: detail_project; Type: TABLE; Schema: public; Owner: ballack
--

CREATE TABLE public.detail_project (
    id uuid NOT NULL,
    produksi_m double precision,
    income_m double precision,
    capex_m double precision,
    non_capex_m double precision,
    opex_m double precision,
    depresiasi_m double precision,
    tax_income_m double precision,
    tax_m double precision,
    ncf_m double precision,
    tahun_ke smallint,
    project_id uuid
);


ALTER TABLE public.detail_project OWNER TO ballack;

--
-- Name: project; Type: TABLE; Schema: public; Owner: ballack
--

CREATE TABLE public.project (
    id uuid NOT NULL,
    cadangan_minyak_m integer,
    kenaikan_opex double precision,
    penurunan_produksi double precision,
    tax double precision,
    jangka_proyek smallint
);


ALTER TABLE public.project OWNER TO ballack;

--
-- Data for Name: detail_project; Type: TABLE DATA; Schema: public; Owner: ballack
--

COPY public.detail_project (id, produksi_m, income_m, capex_m, non_capex_m, opex_m, depresiasi_m, tax_income_m, tax_m, ncf_m, tahun_ke, project_id) FROM stdin;
\.


--
-- Data for Name: project; Type: TABLE DATA; Schema: public; Owner: ballack
--

COPY public.project (id, cadangan_minyak_m, kenaikan_opex, penurunan_produksi, tax, jangka_proyek) FROM stdin;
\.


--
-- Name: detail_project detail_project_pkey; Type: CONSTRAINT; Schema: public; Owner: ballack
--

ALTER TABLE ONLY public.detail_project
    ADD CONSTRAINT detail_project_pkey PRIMARY KEY (id);


--
-- Name: project project_pkey; Type: CONSTRAINT; Schema: public; Owner: ballack
--

ALTER TABLE ONLY public.project
    ADD CONSTRAINT project_pkey PRIMARY KEY (id);


--
-- Name: detail_project fk_detail_project_to_project_id; Type: FK CONSTRAINT; Schema: public; Owner: ballack
--

ALTER TABLE ONLY public.detail_project
    ADD CONSTRAINT fk_detail_project_to_project_id FOREIGN KEY (project_id) REFERENCES public.project(id);


--
-- PostgreSQL database dump complete
--

\unrestrict QhtjenyMff6O2UL3HQp2CqVLM5IUmBwpiDD2NdteDwyVSmrCRSiIhgusD65q5Gz

