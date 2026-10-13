<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $PrefillTokenCount
 * @property int|null $SampleTokenCount
 * @property int|null $TrainingTokenCount
 */
class BillableTokenUsage extends Shape
{
    /**
     * @param array{
     *     PrefillTokenCount?: int|null,
     *     SampleTokenCount?: int|null,
     *     TrainingTokenCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
