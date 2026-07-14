<?php

namespace Sunaoka\Aws\Structures\Connect\SearchRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RuleAttributeAndCondition>|null $OrConditions
 * @property RuleAttributeAndCondition|null $AndCondition
 * @property TagCondition|null $TagCondition
 */
class RuleAttributeFilter extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<RuleAttributeAndCondition>|null,
     *     AndCondition?: RuleAttributeAndCondition|null,
     *     TagCondition?: TagCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
