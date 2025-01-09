<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACLForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BlockAction $Block
 * @property AllowAction $Allow
 * @property CountAction $Count
 * @property CaptchaAction $Captcha
 * @property ChallengeAction $Challenge
 */
class RuleAction extends Shape
{
    /**
     * @param array{
     *     Block?: BlockAction,
     *     Allow?: AllowAction,
     *     Count?: CountAction,
     *     Captcha?: CaptchaAction,
     *     Challenge?: ChallengeAction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
