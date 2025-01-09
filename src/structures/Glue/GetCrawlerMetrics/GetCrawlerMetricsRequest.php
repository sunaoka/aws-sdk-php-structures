<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawlerMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $CrawlerNameList
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetCrawlerMetricsRequest extends Request
{
    /**
     * @param array{
     *     CrawlerNameList?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
