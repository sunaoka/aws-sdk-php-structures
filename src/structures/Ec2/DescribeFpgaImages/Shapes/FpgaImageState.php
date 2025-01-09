<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFpgaImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending'|'failed'|'available'|'unavailable' $Code
 * @property string $Message
 */
class FpgaImageState extends Shape
{
    /**
     * @param array{
     *     Code?: 'pending'|'failed'|'available'|'unavailable',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
