<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ListenerArn
 * @property list<string>|null $RuleArns
 * @property string|null $Marker
 * @property int<1, 400>|null $PageSize
 */
class DescribeRulesRequest extends Request
{
    /**
     * @param array{
     *     ListenerArn?: string|null,
     *     RuleArns?: list<string>|null,
     *     Marker?: string|null,
     *     PageSize?: int<1, 400>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
