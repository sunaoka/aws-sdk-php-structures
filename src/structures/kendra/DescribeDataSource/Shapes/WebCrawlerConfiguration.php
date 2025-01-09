<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Urls $Urls
 * @property int<0, 10> $CrawlDepth
 * @property int<1, 1000> $MaxLinksPerPage
 * @property float $MaxContentSizePerPageInMegaBytes
 * @property int<1, 300> $MaxUrlsPerMinuteCrawlRate
 * @property list<string> $UrlInclusionPatterns
 * @property list<string> $UrlExclusionPatterns
 * @property ProxyConfiguration $ProxyConfiguration
 * @property AuthenticationConfiguration $AuthenticationConfiguration
 */
class WebCrawlerConfiguration extends Shape
{
    /**
     * @param array{
     *     Urls: Urls,
     *     CrawlDepth?: int<0, 10>,
     *     MaxLinksPerPage?: int<1, 1000>,
     *     MaxContentSizePerPageInMegaBytes?: float,
     *     MaxUrlsPerMinuteCrawlRate?: int<1, 300>,
     *     UrlInclusionPatterns?: list<string>,
     *     UrlExclusionPatterns?: list<string>,
     *     ProxyConfiguration?: ProxyConfiguration,
     *     AuthenticationConfiguration?: AuthenticationConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
