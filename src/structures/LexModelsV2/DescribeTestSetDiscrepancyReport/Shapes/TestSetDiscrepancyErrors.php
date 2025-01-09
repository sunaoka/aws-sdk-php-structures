<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeTestSetDiscrepancyReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TestSetIntentDiscrepancyItem> $intentDiscrepancies
 * @property list<TestSetSlotDiscrepancyItem> $slotDiscrepancies
 */
class TestSetDiscrepancyErrors extends Shape
{
    /**
     * @param array{
     *     intentDiscrepancies: list<TestSetIntentDiscrepancyItem>,
     *     slotDiscrepancies: list<TestSetSlotDiscrepancyItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
