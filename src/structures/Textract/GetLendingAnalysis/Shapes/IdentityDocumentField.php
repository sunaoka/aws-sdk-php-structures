<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnalyzeIDDetections|null $Type
 * @property AnalyzeIDDetections|null $ValueDetection
 */
class IdentityDocumentField extends Shape
{
    /**
     * @param array{
     *     Type?: AnalyzeIDDetections|null,
     *     ValueDetection?: AnalyzeIDDetections|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
