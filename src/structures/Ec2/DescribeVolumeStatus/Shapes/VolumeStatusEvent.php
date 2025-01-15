<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumeStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $EventId
 * @property string|null $EventType
 * @property \Aws\Api\DateTimeResult|null $NotAfter
 * @property \Aws\Api\DateTimeResult|null $NotBefore
 * @property string|null $InstanceId
 */
class VolumeStatusEvent extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     EventId?: string|null,
     *     EventType?: string|null,
     *     NotAfter?: \Aws\Api\DateTimeResult|null,
     *     NotBefore?: \Aws\Api\DateTimeResult|null,
     *     InstanceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
