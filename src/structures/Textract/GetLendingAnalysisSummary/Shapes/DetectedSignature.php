<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysisSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $Page
 */
class DetectedSignature extends Shape
{
    /**
     * @param array{Page?: int<0, max>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
