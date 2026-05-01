<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RuleCondition> $rules
 * @property MatchingConfig|null $matchingConfig
 */
class RuleConditionProperties extends Shape
{
    /**
     * @param array{
     *     rules: list<RuleCondition>,
     *     matchingConfig?: MatchingConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
