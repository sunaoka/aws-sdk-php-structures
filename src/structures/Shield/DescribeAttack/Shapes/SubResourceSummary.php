<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeAttack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IP'|'URL' $Type
 * @property string $Id
 * @property list<SummarizedAttackVector> $AttackVectors
 * @property list<SummarizedCounter> $Counters
 */
class SubResourceSummary extends Shape
{
    /**
     * @param array{
     *     Type?: 'IP'|'URL',
     *     Id?: string,
     *     AttackVectors?: list<SummarizedAttackVector>,
     *     Counters?: list<SummarizedCounter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
