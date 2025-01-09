<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysisSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property list<SplitDocument> $SplitDocuments
 * @property list<DetectedSignature> $DetectedSignatures
 * @property list<UndetectedSignature> $UndetectedSignatures
 */
class DocumentGroup extends Shape
{
    /**
     * @param array{
     *     Type?: string,
     *     SplitDocuments?: list<SplitDocument>,
     *     DetectedSignatures?: list<DetectedSignature>,
     *     UndetectedSignatures?: list<UndetectedSignature>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
