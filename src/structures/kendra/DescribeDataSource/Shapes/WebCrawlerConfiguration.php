<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Urls $Urls
 * @property int $CrawlDepth
 * @property int $MaxLinksPerPage
 * @property float $MaxContentSizePerPageInMegaBytes
 * @property int $MaxUrlsPerMinuteCrawlRate
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
     *     CrawlDepth?: int,
     *     MaxLinksPerPage?: int,
     *     MaxContentSizePerPageInMegaBytes?: float,
     *     MaxUrlsPerMinuteCrawlRate?: int,
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
