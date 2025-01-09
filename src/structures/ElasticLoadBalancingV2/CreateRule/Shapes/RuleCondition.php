<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Field
 * @property list<string> $Values
 * @property HostHeaderConditionConfig $HostHeaderConfig
 * @property PathPatternConditionConfig $PathPatternConfig
 * @property HttpHeaderConditionConfig $HttpHeaderConfig
 * @property QueryStringConditionConfig $QueryStringConfig
 * @property HttpRequestMethodConditionConfig $HttpRequestMethodConfig
 * @property SourceIpConditionConfig $SourceIpConfig
 */
class RuleCondition extends Shape
{
    /**
     * @param array{
     *     Field?: string,
     *     Values?: list<string>,
     *     HostHeaderConfig?: HostHeaderConditionConfig,
     *     PathPatternConfig?: PathPatternConditionConfig,
     *     HttpHeaderConfig?: HttpHeaderConditionConfig,
     *     QueryStringConfig?: QueryStringConditionConfig,
     *     HttpRequestMethodConfig?: HttpRequestMethodConditionConfig,
     *     SourceIpConfig?: SourceIpConditionConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
