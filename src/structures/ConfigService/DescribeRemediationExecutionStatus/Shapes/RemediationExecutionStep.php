<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRemediationExecutionStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'SUCCEEDED'|'PENDING'|'FAILED'|null $State
 * @property string|null $ErrorMessage
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $StopTime
 */
class RemediationExecutionStep extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     State?: 'SUCCEEDED'|'PENDING'|'FAILED'|null,
     *     ErrorMessage?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     StopTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
