<?php

namespace Sunaoka\Aws\Structures\WAFV2\CheckCapacity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property int<0, max> $Priority
 * @property Statement $Statement
 * @property RuleAction|null $Action
 * @property OverrideAction|null $OverrideAction
 * @property list<Label>|null $RuleLabels
 * @property VisibilityConfig $VisibilityConfig
 * @property CaptchaConfig|null $CaptchaConfig
 * @property ChallengeConfig|null $ChallengeConfig
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Priority: int<0, max>,
     *     Statement: Statement,
     *     Action?: RuleAction|null,
     *     OverrideAction?: OverrideAction|null,
     *     RuleLabels?: list<Label>|null,
     *     VisibilityConfig: VisibilityConfig,
     *     CaptchaConfig?: CaptchaConfig|null,
     *     ChallengeConfig?: ChallengeConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
