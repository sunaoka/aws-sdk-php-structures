<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRemediationExecutionStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'SUCCEEDED'|'PENDING'|'FAILED' $State
 * @property string $ErrorMessage
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $StopTime
 */
class RemediationExecutionStep extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     State?: 'SUCCEEDED'|'PENDING'|'FAILED',
     *     ErrorMessage?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     StopTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
