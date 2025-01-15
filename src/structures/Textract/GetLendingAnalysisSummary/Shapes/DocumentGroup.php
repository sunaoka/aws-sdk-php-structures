<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysisSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Type
 * @property list<SplitDocument>|null $SplitDocuments
 * @property list<DetectedSignature>|null $DetectedSignatures
 * @property list<UndetectedSignature>|null $UndetectedSignatures
 */
class DocumentGroup extends Shape
{
    /**
     * @param array{
     *     Type?: string|null,
     *     SplitDocuments?: list<SplitDocument>|null,
     *     DetectedSignatures?: list<DetectedSignature>|null,
     *     UndetectedSignatures?: list<UndetectedSignature>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
