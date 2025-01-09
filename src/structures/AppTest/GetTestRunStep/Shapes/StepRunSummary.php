<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MainframeActionSummary $mainframeAction
 * @property CompareActionSummary $compareAction
 * @property ResourceActionSummary $resourceAction
 */
class StepRunSummary extends Shape
{
    /**
     * @param array{
     *     mainframeAction?: MainframeActionSummary,
     *     compareAction?: CompareActionSummary,
     *     resourceAction?: ResourceActionSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
