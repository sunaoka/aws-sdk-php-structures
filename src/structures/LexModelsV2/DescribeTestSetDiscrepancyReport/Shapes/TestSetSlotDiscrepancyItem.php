<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeTestSetDiscrepancyReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $intentName
 * @property string $slotName
 * @property string $errorMessage
 */
class TestSetSlotDiscrepancyItem extends Shape
{
    /**
     * @param array{
     *     intentName: string,
     *     slotName: string,
     *     errorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
