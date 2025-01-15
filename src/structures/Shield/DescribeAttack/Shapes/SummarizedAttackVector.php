<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeAttack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VectorType
 * @property list<SummarizedCounter>|null $VectorCounters
 */
class SummarizedAttackVector extends Shape
{
    /**
     * @param array{
     *     VectorType: string,
     *     VectorCounters?: list<SummarizedCounter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
