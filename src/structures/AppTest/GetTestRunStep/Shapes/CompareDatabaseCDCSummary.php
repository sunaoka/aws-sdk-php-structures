<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CompareDatabaseCDCStepInput $stepInput
 * @property CompareDatabaseCDCStepOutput|null $stepOutput
 */
class CompareDatabaseCDCSummary extends Shape
{
    /**
     * @param array{
     *     stepInput: CompareDatabaseCDCStepInput,
     *     stepOutput?: CompareDatabaseCDCStepOutput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
