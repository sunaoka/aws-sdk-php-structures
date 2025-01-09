<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Step> $steps
 */
class NetworkPath extends Shape
{
    /**
     * @param array{steps?: list<Step>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
