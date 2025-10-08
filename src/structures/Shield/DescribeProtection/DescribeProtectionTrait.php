<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeProtection;

trait DescribeProtectionTrait
{
    /**
     * @param DescribeProtectionRequest $args
     * @return DescribeProtectionResponse
     */
    public function describeProtection(DescribeProtectionRequest $args)
    {
        $result = parent::describeProtection($args->toArray());
        return new DescribeProtectionResponse($result->toArray());
    }
}
