<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\BatchUpdateFirewallRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property 'LOW'|'MEDIUM'|'HIGH' $ConfidenceThreshold
 */
class DnsThreatProtectionRuleTypeConfig extends Shape
{
    /**
     * @param array{
     *     Value: string,
     *     ConfidenceThreshold: 'LOW'|'MEDIUM'|'HIGH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
