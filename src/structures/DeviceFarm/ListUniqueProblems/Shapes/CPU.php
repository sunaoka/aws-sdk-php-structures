<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListUniqueProblems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $frequency
 * @property string $architecture
 * @property double $clock
 */
class CPU extends Shape
{
    /**
     * @param array{
     *     frequency?: string,
     *     architecture?: string,
     *     clock?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
