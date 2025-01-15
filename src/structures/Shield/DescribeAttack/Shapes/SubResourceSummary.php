<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeAttack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IP'|'URL'|null $Type
 * @property string|null $Id
 * @property list<SummarizedAttackVector>|null $AttackVectors
 * @property list<SummarizedCounter>|null $Counters
 */
class SubResourceSummary extends Shape
{
    /**
     * @param array{
     *     Type?: 'IP'|'URL'|null,
     *     Id?: string|null,
     *     AttackVectors?: list<SummarizedAttackVector>|null,
     *     Counters?: list<SummarizedCounter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
