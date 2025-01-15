<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumeStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Code
 * @property string|null $Description
 * @property string|null $EventId
 * @property string|null $EventType
 */
class VolumeStatusAction extends Shape
{
    /**
     * @param array{
     *     Code?: string|null,
     *     Description?: string|null,
     *     EventId?: string|null,
     *     EventType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
