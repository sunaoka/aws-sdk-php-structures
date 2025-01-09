<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeAttack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MitigationName
 */
class Mitigation extends Shape
{
    /**
     * @param array{MitigationName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
