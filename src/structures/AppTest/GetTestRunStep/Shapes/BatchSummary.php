<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchStepInput $stepInput
 * @property BatchStepOutput|null $stepOutput
 */
class BatchSummary extends Shape
{
    /**
     * @param array{
     *     stepInput: BatchStepInput,
     *     stepOutput?: BatchStepOutput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
