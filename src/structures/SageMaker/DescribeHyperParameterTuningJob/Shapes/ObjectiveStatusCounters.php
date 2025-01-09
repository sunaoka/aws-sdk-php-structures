<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Succeeded
 * @property int $Pending
 * @property int $Failed
 */
class ObjectiveStatusCounters extends Shape
{
    /**
     * @param array{
     *     Succeeded?: int,
     *     Pending?: int,
     *     Failed?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
