<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableApplicationStatusCheckSuppression\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property \Aws\Api\DateTimeResult|null $SuppressAt
 * @property \Aws\Api\DateTimeResult|null $ResumeAt
 * @property string|null $Reason
 */
class UnsuccessfulSuppressionResponseObject extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     SuppressAt?: \Aws\Api\DateTimeResult|null,
     *     ResumeAt?: \Aws\Api\DateTimeResult|null,
     *     Reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
