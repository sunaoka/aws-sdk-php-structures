<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Page
 * @property PageClassification $PageClassification
 * @property list<Extraction> $Extractions
 */
class LendingResult extends Shape
{
    /**
     * @param array{
     *     Page?: int,
     *     PageClassification?: PageClassification,
     *     Extractions?: list<Extraction>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
