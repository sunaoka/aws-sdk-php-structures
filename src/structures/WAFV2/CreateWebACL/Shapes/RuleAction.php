<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BlockAction|null $Block
 * @property AllowAction|null $Allow
 * @property CountAction|null $Count
 * @property CaptchaAction|null $Captcha
 * @property ChallengeAction|null $Challenge
 */
class RuleAction extends Shape
{
    /**
     * @param array{
     *     Block?: BlockAction|null,
     *     Allow?: AllowAction|null,
     *     Count?: CountAction|null,
     *     Captcha?: CaptchaAction|null,
     *     Challenge?: ChallengeAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
