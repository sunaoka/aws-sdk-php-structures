<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeCapacityProviders;

trait DescribeCapacityProvidersTrait
{
    /**
     * @param DescribeCapacityProvidersRequest $args
     * @return DescribeCapacityProvidersResponse
     */
    public function describeCapacityProviders(DescribeCapacityProvidersRequest $args)
    {
        $result = parent::describeCapacityProviders($args->toArray());
        return new DescribeCapacityProvidersResponse($result->toArray());
    }
}
