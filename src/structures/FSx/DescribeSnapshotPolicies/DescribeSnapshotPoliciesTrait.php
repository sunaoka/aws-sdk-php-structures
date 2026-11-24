<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeSnapshotPolicies;

trait DescribeSnapshotPoliciesTrait
{
    /**
     * @param DescribeSnapshotPoliciesRequest $args
     * @return DescribeSnapshotPoliciesResponse
     */
    public function describeSnapshotPolicies(DescribeSnapshotPoliciesRequest $args)
    {
        $result = parent::describeSnapshotPolicies($args->toArray());
        return new DescribeSnapshotPoliciesResponse($result->toArray());
    }
}
