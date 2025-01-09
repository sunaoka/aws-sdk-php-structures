<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeVolumes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'file-system-id'|'storage-virtual-machine-id' $Name
 * @property list<string> $Values
 */
class VolumeFilter extends Shape
{
    /**
     * @param array{
     *     Name?: 'file-system-id'|'storage-virtual-machine-id',
     *     Values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
