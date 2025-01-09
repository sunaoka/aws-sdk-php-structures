<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\UpdateSafetyRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $SafetyRuleArn
 * @property int $WaitPeriodMs
 */
class AssertionRuleUpdate extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     SafetyRuleArn: string,
     *     WaitPeriodMs: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
