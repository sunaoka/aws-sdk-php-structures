<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeEntitlements;

trait DescribeEntitlementsTrait
{
    /**
     * @param DescribeEntitlementsRequest $args
     * @return DescribeEntitlementsResponse
     */
    public function describeEntitlements(DescribeEntitlementsRequest $args)
    {
        $result = parent::describeEntitlements($args->toArray());
        return new DescribeEntitlementsResponse($result->toArray());
    }
}
