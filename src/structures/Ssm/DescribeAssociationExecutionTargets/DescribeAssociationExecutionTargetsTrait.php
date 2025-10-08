<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAssociationExecutionTargets;

trait DescribeAssociationExecutionTargetsTrait
{
    /**
     * @param DescribeAssociationExecutionTargetsRequest $args
     * @return DescribeAssociationExecutionTargetsResponse
     */
    public function describeAssociationExecutionTargets(DescribeAssociationExecutionTargetsRequest $args)
    {
        $result = parent::describeAssociationExecutionTargets($args->toArray());
        return new DescribeAssociationExecutionTargetsResponse($result->toArray());
    }
}
