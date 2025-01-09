<?php

namespace Sunaoka\Aws\Structures\SnowBall\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property INDTaxDocuments $IND
 */
class TaxDocuments extends Shape
{
    /**
     * @param array{IND?: INDTaxDocuments} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
