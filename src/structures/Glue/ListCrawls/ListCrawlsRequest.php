<?php

namespace Sunaoka\Aws\Structures\Glue\ListCrawls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CrawlerName
 * @property int<1, 1000>|null $MaxResults
 * @property list<Shapes\CrawlsFilter>|null $Filters
 * @property string|null $NextToken
 */
class ListCrawlsRequest extends Request
{
    /**
     * @param array{
     *     CrawlerName: string,
     *     MaxResults?: int<1, 1000>|null,
     *     Filters?: list<Shapes\CrawlsFilter>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
