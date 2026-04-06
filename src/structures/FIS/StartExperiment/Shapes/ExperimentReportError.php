<?php

namespace Sunaoka\Aws\Structures\FIS\StartExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $code
 */
class ExperimentReportError extends Shape
{
    /**
     * @param array{code?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
