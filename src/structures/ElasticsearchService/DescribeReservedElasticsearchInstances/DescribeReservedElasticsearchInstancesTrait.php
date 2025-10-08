<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeReservedElasticsearchInstances;

trait DescribeReservedElasticsearchInstancesTrait
{
    /**
     * @param DescribeReservedElasticsearchInstancesRequest $args
     * @return DescribeReservedElasticsearchInstancesResponse
     */
    public function describeReservedElasticsearchInstances(DescribeReservedElasticsearchInstancesRequest $args)
    {
        $result = parent::describeReservedElasticsearchInstances($args->toArray());
        return new DescribeReservedElasticsearchInstancesResponse($result->toArray());
    }
}
