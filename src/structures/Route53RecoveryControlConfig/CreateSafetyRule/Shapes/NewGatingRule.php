<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\CreateSafetyRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ControlPanelArn
 * @property list<string> $GatingControls
 * @property string $Name
 * @property RuleConfig $RuleConfig
 * @property list<string> $TargetControls
 * @property int $WaitPeriodMs
 */
class NewGatingRule extends Shape
{
    /**
     * @param array{
     *     ControlPanelArn: string,
     *     GatingControls: list<string>,
     *     Name: string,
     *     RuleConfig: RuleConfig,
     *     TargetControls: list<string>,
     *     WaitPeriodMs: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
