<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Recommendation $recommendation
 */
class Remediation extends Shape
{
    /**
     * @param array{recommendation?: Recommendation} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
