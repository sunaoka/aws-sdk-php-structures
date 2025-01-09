<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeReservedElasticsearchInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedElasticsearchInstanceId
 * @property int<min, 100> $MaxResults
 * @property string $NextToken
 */
class DescribeReservedElasticsearchInstancesRequest extends Request
{
    /**
     * @param array{
     *     ReservedElasticsearchInstanceId?: string,
     *     MaxResults?: int<min, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
