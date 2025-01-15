<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $Page
 * @property PageClassification|null $PageClassification
 * @property list<Extraction>|null $Extractions
 */
class LendingResult extends Shape
{
    /**
     * @param array{
     *     Page?: int<0, max>|null,
     *     PageClassification?: PageClassification|null,
     *     Extractions?: list<Extraction>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
