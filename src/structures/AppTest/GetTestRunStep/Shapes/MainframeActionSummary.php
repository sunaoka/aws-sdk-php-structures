<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchSummary $batch
 * @property TN3270Summary $tn3270
 */
class MainframeActionSummary extends Shape
{
    /**
     * @param array{
     *     batch?: BatchSummary,
     *     tn3270?: TN3270Summary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
