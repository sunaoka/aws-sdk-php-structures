<?php

namespace Sunaoka\Aws\Structures\WafRegional\CreateRateBasedRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleId
 * @property string|null $Name
 * @property string|null $MetricName
 * @property list<Predicate> $MatchPredicates
 * @property 'IP' $RateKey
 * @property int<100, 2000000000> $RateLimit
 */
class RateBasedRule extends Shape
{
    /**
     * @param array{
     *     RuleId: string,
     *     Name?: string|null,
     *     MetricName?: string|null,
     *     MatchPredicates: list<Predicate>,
     *     RateKey: 'IP',
     *     RateLimit: int<100, 2000000000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
