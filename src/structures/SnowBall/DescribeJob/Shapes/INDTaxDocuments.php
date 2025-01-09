<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GSTIN
 */
class INDTaxDocuments extends Shape
{
    /**
     * @param array{GSTIN?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
