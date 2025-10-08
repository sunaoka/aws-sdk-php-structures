<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeRegistry;

trait DescribeRegistryTrait
{
    /**
     * @param DescribeRegistryRequest $args
     * @return DescribeRegistryResponse
     */
    public function describeRegistry(DescribeRegistryRequest $args)
    {
        $result = parent::describeRegistry($args->toArray());
        return new DescribeRegistryResponse($result->toArray());
    }
}
