<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\CreateSafetyRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\NewAssertionRule $AssertionRule
 * @property string $ClientToken
 * @property Shapes\NewGatingRule $GatingRule
 * @property array<string, string> $Tags
 */
class CreateSafetyRuleRequest extends Request
{
    /**
     * @param array{
     *     AssertionRule?: Shapes\NewAssertionRule,
     *     ClientToken?: string,
     *     GatingRule?: Shapes\NewGatingRule,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
