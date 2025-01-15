<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetricName
 * @property string|null $Name
 * @property string|null $RateKey
 * @property int|null $RateLimit
 * @property string|null $RuleId
 * @property list<AwsWafRateBasedRuleMatchPredicate>|null $MatchPredicates
 */
class AwsWafRateBasedRuleDetails extends Shape
{
    /**
     * @param array{
     *     MetricName?: string|null,
     *     Name?: string|null,
     *     RateKey?: string|null,
     *     RateLimit?: int|null,
     *     RuleId?: string|null,
     *     MatchPredicates?: list<AwsWafRateBasedRuleMatchPredicate>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
