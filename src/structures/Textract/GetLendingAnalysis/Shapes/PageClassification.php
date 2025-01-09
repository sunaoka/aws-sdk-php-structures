<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Prediction> $PageType
 * @property list<Prediction> $PageNumber
 */
class PageClassification extends Shape
{
    /**
     * @param array{
     *     PageType: list<Prediction>,
     *     PageNumber: list<Prediction>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
