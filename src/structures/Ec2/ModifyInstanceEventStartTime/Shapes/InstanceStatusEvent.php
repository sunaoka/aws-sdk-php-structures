<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceEventStartTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceEventId
 * @property 'instance-reboot'|'system-reboot'|'system-maintenance'|'instance-retirement'|'instance-stop'|null $Code
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $NotAfter
 * @property \Aws\Api\DateTimeResult|null $NotBefore
 * @property \Aws\Api\DateTimeResult|null $NotBeforeDeadline
 */
class InstanceStatusEvent extends Shape
{
    /**
     * @param array{
     *     InstanceEventId?: string|null,
     *     Code?: 'instance-reboot'|'system-reboot'|'system-maintenance'|'instance-retirement'|'instance-stop'|null,
     *     Description?: string|null,
     *     NotAfter?: \Aws\Api\DateTimeResult|null,
     *     NotBefore?: \Aws\Api\DateTimeResult|null,
     *     NotBeforeDeadline?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
