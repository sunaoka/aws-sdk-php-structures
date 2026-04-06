<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\SetRulePriorities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Field
 * @property list<string>|null $Values
 * @property HostHeaderConditionConfig|null $HostHeaderConfig
 * @property PathPatternConditionConfig|null $PathPatternConfig
 * @property HttpHeaderConditionConfig|null $HttpHeaderConfig
 * @property QueryStringConditionConfig|null $QueryStringConfig
 * @property HttpRequestMethodConditionConfig|null $HttpRequestMethodConfig
 * @property SourceIpConditionConfig|null $SourceIpConfig
 * @property list<string>|null $RegexValues
 */
class RuleCondition extends Shape
{
    /**
     * @param array{
     *     Field?: string|null,
     *     Values?: list<string>|null,
     *     HostHeaderConfig?: HostHeaderConditionConfig|null,
     *     PathPatternConfig?: PathPatternConditionConfig|null,
     *     HttpHeaderConfig?: HttpHeaderConditionConfig|null,
     *     QueryStringConfig?: QueryStringConditionConfig|null,
     *     HttpRequestMethodConfig?: HttpRequestMethodConditionConfig|null,
     *     SourceIpConfig?: SourceIpConditionConfig|null,
     *     RegexValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
