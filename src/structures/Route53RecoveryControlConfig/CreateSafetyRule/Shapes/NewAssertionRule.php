<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\CreateSafetyRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AssertedControls
 * @property string $ControlPanelArn
 * @property string $Name
 * @property RuleConfig $RuleConfig
 * @property int $WaitPeriodMs
 */
class NewAssertionRule extends Shape
{
    /**
     * @param array{
     *     AssertedControls: list<string>,
     *     ControlPanelArn: string,
     *     Name: string,
     *     RuleConfig: RuleConfig,
     *     WaitPeriodMs: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
