<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumeStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $EventId
 * @property string $EventType
 * @property \Aws\Api\DateTimeResult $NotAfter
 * @property \Aws\Api\DateTimeResult $NotBefore
 * @property string $InstanceId
 */
class VolumeStatusEvent extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     EventId?: string,
     *     EventType?: string,
     *     NotAfter?: \Aws\Api\DateTimeResult,
     *     NotBefore?: \Aws\Api\DateTimeResult,
     *     InstanceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
