<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $importDataSetSummary
 */
class M2ManagedApplicationStepOutput extends Shape
{
    /**
     * @param array{importDataSetSummary?: array<string, string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
