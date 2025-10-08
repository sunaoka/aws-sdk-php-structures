<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheParameters;

trait DescribeCacheParametersTrait
{
    /**
     * @param DescribeCacheParametersRequest $args
     * @return DescribeCacheParametersResponse
     */
    public function describeCacheParameters(DescribeCacheParametersRequest $args)
    {
        $result = parent::describeCacheParameters($args->toArray());
        return new DescribeCacheParametersResponse($result->toArray());
    }
}
