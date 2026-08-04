<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableApplicationStatusCheckSuppression\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property \Aws\Api\DateTimeResult|null $SuppressAt
 * @property \Aws\Api\DateTimeResult|null $ResumeAt
 */
class SuccessfulSuppressionResponseObject extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     SuppressAt?: \Aws\Api\DateTimeResult|null,
     *     ResumeAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
