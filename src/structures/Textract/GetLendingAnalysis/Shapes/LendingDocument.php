<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LendingField>|null $LendingFields
 * @property list<SignatureDetection>|null $SignatureDetections
 */
class LendingDocument extends Shape
{
    /**
     * @param array{
     *     LendingFields?: list<LendingField>|null,
     *     SignatureDetections?: list<SignatureDetection>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
