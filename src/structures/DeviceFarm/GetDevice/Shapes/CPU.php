<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $frequency
 * @property string|null $architecture
 * @property double|null $clock
 */
class CPU extends Shape
{
    /**
     * @param array{
     *     frequency?: string|null,
     *     architecture?: string|null,
     *     clock?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
