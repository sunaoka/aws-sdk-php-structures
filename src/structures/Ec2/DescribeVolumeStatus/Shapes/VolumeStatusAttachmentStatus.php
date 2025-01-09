<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumeStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IoPerformance
 * @property string $InstanceId
 */
class VolumeStatusAttachmentStatus extends Shape
{
    /**
     * @param array{
     *     IoPerformance?: string,
     *     InstanceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
