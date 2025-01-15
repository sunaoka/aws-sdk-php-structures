<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $expression
 * @property array<string, Specifications>|null $slotSpecifications
 */
class SubSlotSetting extends Shape
{
    /**
     * @param array{
     *     expression?: string|null,
     *     slotSpecifications?: array<string, Specifications>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
