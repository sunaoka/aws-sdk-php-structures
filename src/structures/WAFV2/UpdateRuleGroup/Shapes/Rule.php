<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property int $Priority
 * @property Statement $Statement
 * @property RuleAction $Action
 * @property OverrideAction $OverrideAction
 * @property list<Label> $RuleLabels
 * @property VisibilityConfig $VisibilityConfig
 * @property CaptchaConfig $CaptchaConfig
 * @property ChallengeConfig $ChallengeConfig
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Priority: int,
     *     Statement: Statement,
     *     Action?: RuleAction,
     *     OverrideAction?: OverrideAction,
     *     RuleLabels?: list<Label>,
     *     VisibilityConfig: VisibilityConfig,
     *     CaptchaConfig?: CaptchaConfig,
     *     ChallengeConfig?: ChallengeConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
