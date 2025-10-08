<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAssociationExecutions;

trait DescribeAssociationExecutionsTrait
{
    /**
     * @param DescribeAssociationExecutionsRequest $args
     * @return DescribeAssociationExecutionsResponse
     */
    public function describeAssociationExecutions(DescribeAssociationExecutionsRequest $args)
    {
        $result = parent::describeAssociationExecutions($args->toArray());
        return new DescribeAssociationExecutionsResponse($result->toArray());
    }
}
