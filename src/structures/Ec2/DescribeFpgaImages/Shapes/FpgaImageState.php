<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFpgaImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending'|'failed'|'available'|'unavailable'|null $Code
 * @property string|null $Message
 */
class FpgaImageState extends Shape
{
    /**
     * @param array{
     *     Code?: 'pending'|'failed'|'available'|'unavailable'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
