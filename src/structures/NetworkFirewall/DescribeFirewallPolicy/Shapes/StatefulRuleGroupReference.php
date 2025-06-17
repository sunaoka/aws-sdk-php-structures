<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewallPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property int<1, 65535>|null $Priority
 * @property StatefulRuleGroupOverride|null $Override
 * @property bool|null $DeepThreatInspection
 */
class StatefulRuleGroupReference extends Shape
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     Priority?: int<1, 65535>|null,
     *     Override?: StatefulRuleGroupOverride|null,
     *     DeepThreatInspection?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
