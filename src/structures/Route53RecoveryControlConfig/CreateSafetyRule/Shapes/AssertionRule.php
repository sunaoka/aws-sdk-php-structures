<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\CreateSafetyRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AssertedControls
 * @property string $ControlPanelArn
 * @property string $Name
 * @property RuleConfig $RuleConfig
 * @property string $SafetyRuleArn
 * @property 'PENDING'|'DEPLOYED'|'PENDING_DELETION' $Status
 * @property int $WaitPeriodMs
 * @property string|null $Owner
 */
class AssertionRule extends Shape
{
    /**
     * @param array{
     *     AssertedControls: list<string>,
     *     ControlPanelArn: string,
     *     Name: string,
     *     RuleConfig: RuleConfig,
     *     SafetyRuleArn: string,
     *     Status: 'PENDING'|'DEPLOYED'|'PENDING_DELETION',
     *     WaitPeriodMs: int,
     *     Owner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
