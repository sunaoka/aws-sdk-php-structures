<?php

namespace Sunaoka\Aws\Structures\Glue\ListCrawlers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property array<string, string>|null $Tags
 */
class ListCrawlersRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
