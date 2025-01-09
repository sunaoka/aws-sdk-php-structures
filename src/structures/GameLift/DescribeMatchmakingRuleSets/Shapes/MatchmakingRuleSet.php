<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeMatchmakingRuleSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleSetName
 * @property string $RuleSetArn
 * @property string $RuleSetBody
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class MatchmakingRuleSet extends Shape
{
    /**
     * @param array{
     *     RuleSetName?: string,
     *     RuleSetArn?: string,
     *     RuleSetBody: string,
     *     CreationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
