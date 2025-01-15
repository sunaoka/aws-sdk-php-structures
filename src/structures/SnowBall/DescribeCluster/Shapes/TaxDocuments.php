<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property INDTaxDocuments|null $IND
 */
class TaxDocuments extends Shape
{
    /**
     * @param array{IND?: INDTaxDocuments|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
