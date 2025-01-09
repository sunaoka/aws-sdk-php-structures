<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $Page
 * @property PageClassification $PageClassification
 * @property list<Extraction> $Extractions
 */
class LendingResult extends Shape
{
    /**
     * @param array{
     *     Page?: int<0, max>,
     *     PageClassification?: PageClassification,
     *     Extractions?: list<Extraction>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
