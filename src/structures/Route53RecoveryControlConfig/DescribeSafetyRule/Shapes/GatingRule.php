<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\DescribeSafetyRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ControlPanelArn
 * @property list<string> $GatingControls
 * @property string $Name
 * @property RuleConfig $RuleConfig
 * @property string $SafetyRuleArn
 * @property 'PENDING'|'DEPLOYED'|'PENDING_DELETION' $Status
 * @property list<string> $TargetControls
 * @property int $WaitPeriodMs
 * @property string $Owner
 */
class GatingRule extends Shape
{
    /**
     * @param array{
     *     ControlPanelArn: string,
     *     GatingControls: list<string>,
     *     Name: string,
     *     RuleConfig: RuleConfig,
     *     SafetyRuleArn: string,
     *     Status: 'PENDING'|'DEPLOYED'|'PENDING_DELETION',
     *     TargetControls: list<string>,
     *     WaitPeriodMs: int,
     *     Owner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
