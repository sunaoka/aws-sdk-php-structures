<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchInstanceTypeLimits;

trait DescribeElasticsearchInstanceTypeLimitsTrait
{
    /**
     * @param DescribeElasticsearchInstanceTypeLimitsRequest $args
     * @return DescribeElasticsearchInstanceTypeLimitsResponse
     */
    public function describeElasticsearchInstanceTypeLimits(DescribeElasticsearchInstanceTypeLimitsRequest $args)
    {
        $result = parent::describeElasticsearchInstanceTypeLimits($args->toArray());
        return new DescribeElasticsearchInstanceTypeLimitsResponse($result->toArray());
    }
}
