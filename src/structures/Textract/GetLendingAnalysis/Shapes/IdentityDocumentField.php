<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnalyzeIDDetections $Type
 * @property AnalyzeIDDetections $ValueDetection
 */
class IdentityDocumentField extends Shape
{
    /**
     * @param array{
     *     Type?: AnalyzeIDDetections,
     *     ValueDetection?: AnalyzeIDDetections
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
