<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LendingField> $LendingFields
 * @property list<SignatureDetection> $SignatureDetections
 */
class LendingDocument extends Shape
{
    /**
     * @param array{
     *     LendingFields?: list<LendingField>,
     *     SignatureDetections?: list<SignatureDetection>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
