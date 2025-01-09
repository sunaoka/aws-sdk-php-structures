<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $approximateNumberOfObjectsToProcess
 * @property double $numberOfRuns
 */
class Statistics extends Shape
{
    /**
     * @param array{
     *     approximateNumberOfObjectsToProcess?: double,
     *     numberOfRuns?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
