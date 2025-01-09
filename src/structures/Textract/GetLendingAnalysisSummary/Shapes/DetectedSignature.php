<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysisSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Page
 */
class DetectedSignature extends Shape
{
    /**
     * @param array{Page?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
