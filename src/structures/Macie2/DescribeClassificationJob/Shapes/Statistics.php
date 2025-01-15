<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $approximateNumberOfObjectsToProcess
 * @property double|null $numberOfRuns
 */
class Statistics extends Shape
{
    /**
     * @param array{
     *     approximateNumberOfObjectsToProcess?: double|null,
     *     numberOfRuns?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
