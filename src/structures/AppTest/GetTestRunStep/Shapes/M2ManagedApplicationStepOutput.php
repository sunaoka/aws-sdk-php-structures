<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $importDataSetSummary
 */
class M2ManagedApplicationStepOutput extends Shape
{
    /**
     * @param array{importDataSetSummary?: array<string, string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
