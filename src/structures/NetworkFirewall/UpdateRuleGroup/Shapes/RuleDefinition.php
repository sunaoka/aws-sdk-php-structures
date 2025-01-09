<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MatchAttributes $MatchAttributes
 * @property list<string> $Actions
 */
class RuleDefinition extends Shape
{
    /**
     * @param array{
     *     MatchAttributes: MatchAttributes,
     *     Actions: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
