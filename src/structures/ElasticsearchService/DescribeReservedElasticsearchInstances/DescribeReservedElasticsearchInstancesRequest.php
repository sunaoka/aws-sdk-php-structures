<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeReservedElasticsearchInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ReservedElasticsearchInstanceId
 * @property int<min, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeReservedElasticsearchInstancesRequest extends Request
{
    /**
     * @param array{
     *     ReservedElasticsearchInstanceId?: string|null,
     *     MaxResults?: int<min, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
