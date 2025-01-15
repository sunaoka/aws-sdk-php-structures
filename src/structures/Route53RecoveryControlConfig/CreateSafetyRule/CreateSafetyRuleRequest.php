<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\CreateSafetyRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\NewAssertionRule|null $AssertionRule
 * @property string|null $ClientToken
 * @property Shapes\NewGatingRule|null $GatingRule
 * @property array<string, string>|null $Tags
 */
class CreateSafetyRuleRequest extends Request
{
    /**
     * @param array{
     *     AssertionRule?: Shapes\NewAssertionRule|null,
     *     ClientToken?: string|null,
     *     GatingRule?: Shapes\NewGatingRule|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
