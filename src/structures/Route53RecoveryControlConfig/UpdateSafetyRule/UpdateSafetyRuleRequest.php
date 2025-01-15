<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\UpdateSafetyRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AssertionRuleUpdate|null $AssertionRuleUpdate
 * @property Shapes\GatingRuleUpdate|null $GatingRuleUpdate
 */
class UpdateSafetyRuleRequest extends Request
{
    /**
     * @param array{
     *     AssertionRuleUpdate?: Shapes\AssertionRuleUpdate|null,
     *     GatingRuleUpdate?: Shapes\GatingRuleUpdate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
