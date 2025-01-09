<?php

namespace Sunaoka\Aws\Structures\Glue\ListCrawls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CrawlerName
 * @property int $MaxResults
 * @property list<Shapes\CrawlsFilter> $Filters
 * @property string $NextToken
 */
class ListCrawlsRequest extends Request
{
    /**
     * @param array{
     *     CrawlerName: string,
     *     MaxResults?: int,
     *     Filters?: list<Shapes\CrawlsFilter>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
