<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeRecoveryPoint;

trait DescribeRecoveryPointTrait
{
    /**
     * @param DescribeRecoveryPointRequest $args
     * @return DescribeRecoveryPointResponse
     */
    public function describeRecoveryPoint(DescribeRecoveryPointRequest $args)
    {
        $result = parent::describeRecoveryPoint($args->toArray());
        return new DescribeRecoveryPointResponse($result->toArray());
    }
}
