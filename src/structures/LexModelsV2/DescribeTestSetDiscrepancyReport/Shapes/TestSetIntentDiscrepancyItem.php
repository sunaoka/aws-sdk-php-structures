<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeTestSetDiscrepancyReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $intentName
 * @property string $errorMessage
 */
class TestSetIntentDiscrepancyItem extends Shape
{
    /**
     * @param array{
     *     intentName: string,
     *     errorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
