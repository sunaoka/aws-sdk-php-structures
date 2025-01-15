<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumeStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IoPerformance
 * @property string|null $InstanceId
 */
class VolumeStatusAttachmentStatus extends Shape
{
    /**
     * @param array{
     *     IoPerformance?: string|null,
     *     InstanceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
