<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeMatchmakingRuleSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuleSetName
 * @property string|null $RuleSetArn
 * @property string $RuleSetBody
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 */
class MatchmakingRuleSet extends Shape
{
    /**
     * @param array{
     *     RuleSetName?: string|null,
     *     RuleSetArn?: string|null,
     *     RuleSetBody: string,
     *     CreationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
