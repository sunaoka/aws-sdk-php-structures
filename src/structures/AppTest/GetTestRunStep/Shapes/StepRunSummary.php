<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MainframeActionSummary|null $mainframeAction
 * @property CompareActionSummary|null $compareAction
 * @property ResourceActionSummary|null $resourceAction
 */
class StepRunSummary extends Shape
{
    /**
     * @param array{
     *     mainframeAction?: MainframeActionSummary|null,
     *     compareAction?: CompareActionSummary|null,
     *     resourceAction?: ResourceActionSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
