<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeIpRestriction;

trait DescribeIpRestrictionTrait
{
    /**
     * @param DescribeIpRestrictionRequest $args
     * @return DescribeIpRestrictionResponse
     */
    public function describeIpRestriction(DescribeIpRestrictionRequest $args)
    {
        $result = parent::describeIpRestriction($args->toArray());
        return new DescribeIpRestrictionResponse($result->toArray());
    }
}
