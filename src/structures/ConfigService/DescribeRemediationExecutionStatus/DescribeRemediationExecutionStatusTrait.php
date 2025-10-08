<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRemediationExecutionStatus;

trait DescribeRemediationExecutionStatusTrait
{
    /**
     * @param DescribeRemediationExecutionStatusRequest $args
     * @return DescribeRemediationExecutionStatusResponse
     */
    public function describeRemediationExecutionStatus(DescribeRemediationExecutionStatusRequest $args)
    {
        $result = parent::describeRemediationExecutionStatus($args->toArray());
        return new DescribeRemediationExecutionStatusResponse($result->toArray());
    }
}
