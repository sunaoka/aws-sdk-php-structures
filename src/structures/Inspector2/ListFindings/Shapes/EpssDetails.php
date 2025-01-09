<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $score
 */
class EpssDetails extends Shape
{
    /**
     * @param array{score?: double} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
