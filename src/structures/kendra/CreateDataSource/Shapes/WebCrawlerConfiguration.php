<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Urls $Urls
 * @property int<0, 10>|null $CrawlDepth
 * @property int<1, 1000>|null $MaxLinksPerPage
 * @property float|null $MaxContentSizePerPageInMegaBytes
 * @property int<1, 300>|null $MaxUrlsPerMinuteCrawlRate
 * @property list<string>|null $UrlInclusionPatterns
 * @property list<string>|null $UrlExclusionPatterns
 * @property ProxyConfiguration|null $ProxyConfiguration
 * @property AuthenticationConfiguration|null $AuthenticationConfiguration
 */
class WebCrawlerConfiguration extends Shape
{
    /**
     * @param array{
     *     Urls: Urls,
     *     CrawlDepth?: int<0, 10>|null,
     *     MaxLinksPerPage?: int<1, 1000>|null,
     *     MaxContentSizePerPageInMegaBytes?: float|null,
     *     MaxUrlsPerMinuteCrawlRate?: int<1, 300>|null,
     *     UrlInclusionPatterns?: list<string>|null,
     *     UrlExclusionPatterns?: list<string>|null,
     *     ProxyConfiguration?: ProxyConfiguration|null,
     *     AuthenticationConfiguration?: AuthenticationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
