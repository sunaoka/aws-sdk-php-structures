<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceEventId
 * @property 'instance-reboot'|'system-reboot'|'system-maintenance'|'instance-retirement'|'instance-stop' $Code
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $NotAfter
 * @property \Aws\Api\DateTimeResult $NotBefore
 * @property \Aws\Api\DateTimeResult $NotBeforeDeadline
 */
class InstanceStatusEvent extends Shape
{
    /**
     * @param array{
     *     InstanceEventId?: string,
     *     Code?: 'instance-reboot'|'system-reboot'|'system-maintenance'|'instance-retirement'|'instance-stop',
     *     Description?: string,
     *     NotAfter?: \Aws\Api\DateTimeResult,
     *     NotBefore?: \Aws\Api\DateTimeResult,
     *     NotBeforeDeadline?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
