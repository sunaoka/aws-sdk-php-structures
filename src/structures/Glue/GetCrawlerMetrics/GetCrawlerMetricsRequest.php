<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawlerMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $CrawlerNameList
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class GetCrawlerMetricsRequest extends Request
{
    /**
     * @param array{
     *     CrawlerNameList?: list<string>|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
