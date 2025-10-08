<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeAddonVersions;

trait DescribeAddonVersionsTrait
{
    /**
     * @param DescribeAddonVersionsRequest $args
     * @return DescribeAddonVersionsResponse
     */
    public function describeAddonVersions(DescribeAddonVersionsRequest $args)
    {
        $result = parent::describeAddonVersions($args->toArray());
        return new DescribeAddonVersionsResponse($result->toArray());
    }
}
