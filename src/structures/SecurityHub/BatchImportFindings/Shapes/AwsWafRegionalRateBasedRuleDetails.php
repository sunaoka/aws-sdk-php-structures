<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricName
 * @property string $Name
 * @property string $RateKey
 * @property int $RateLimit
 * @property string $RuleId
 * @property list<AwsWafRegionalRateBasedRuleMatchPredicate> $MatchPredicates
 */
class AwsWafRegionalRateBasedRuleDetails extends Shape
{
    /**
     * @param array{
     *     MetricName?: string,
     *     Name?: string,
     *     RateKey?: string,
     *     RateLimit?: int,
     *     RuleId?: string,
     *     MatchPredicates?: list<AwsWafRegionalRateBasedRuleMatchPredicate>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
