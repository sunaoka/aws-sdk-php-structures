<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumeStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Code
 * @property string $Description
 * @property string $EventId
 * @property string $EventType
 */
class VolumeStatusAction extends Shape
{
    /**
     * @param array{
     *     Code?: string,
     *     Description?: string,
     *     EventId?: string,
     *     EventType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
