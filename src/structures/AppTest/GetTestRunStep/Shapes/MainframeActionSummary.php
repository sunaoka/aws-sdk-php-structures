<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchSummary|null $batch
 * @property TN3270Summary|null $tn3270
 */
class MainframeActionSummary extends Shape
{
    /**
     * @param array{
     *     batch?: BatchSummary|null,
     *     tn3270?: TN3270Summary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
