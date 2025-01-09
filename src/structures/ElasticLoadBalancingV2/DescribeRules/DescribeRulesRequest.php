<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 * @property list<string> $RuleArns
 * @property string $Marker
 * @property int<1, 400> $PageSize
 */
class DescribeRulesRequest extends Request
{
    /**
     * @param array{
     *     ListenerArn?: string,
     *     RuleArns?: list<string>,
     *     Marker?: string,
     *     PageSize?: int<1, 400>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
