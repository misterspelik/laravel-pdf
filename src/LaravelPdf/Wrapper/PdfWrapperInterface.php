<?php

namespace misterspelik\LaravelPdf\Wrapper;

use misterspelik\LaravelPdf\PdfInterface;

interface PdfWrapperInterface
{
    /**
     * Loads a HTML string
     *
     * @param string $html
     * @return \misterspelik\LaravelPdf\PdfInterface
     */
    public function loadHTML(string $html, array $config = []): PdfInterface;

    /**
     * Loads a HTML file
     *
     * @param string $file
     * @param array $config
     *
     * @return \misterspelik\LaravelPdf\PdfInterface
     */
    public function loadFile(string $file, array $config = []): PdfInterface;

    /**
     * Loads a View and convert to HTML
     *
     * @param string $view
     * @param array $data
     * @param array $mergeData
     * @param array $config
     *
     * @return \misterspelik\LaravelPdf\PdfInterface
     */
    public function loadView(string $view, array $data = [], array $mergeData = [], array $config = []): PdfInterface;
}