<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $expression
 * @property array<string, Specifications> $slotSpecifications
 */
class SubSlotSetting extends Shape
{
    /**
     * @param array{
     *     expression?: string,
     *     slotSpecifications?: array<string, Specifications>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
