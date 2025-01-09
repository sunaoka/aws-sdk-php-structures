<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\UpdateSafetyRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AssertionRuleUpdate $AssertionRuleUpdate
 * @property Shapes\GatingRuleUpdate $GatingRuleUpdate
 */
class UpdateSafetyRuleRequest extends Request
{
    /**
     * @param array{
     *     AssertionRuleUpdate?: Shapes\AssertionRuleUpdate,
     *     GatingRuleUpdate?: Shapes\GatingRuleUpdate
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
