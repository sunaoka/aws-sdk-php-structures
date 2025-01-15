<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\ListElasticsearchVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<min, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListElasticsearchVersionsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<min, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
