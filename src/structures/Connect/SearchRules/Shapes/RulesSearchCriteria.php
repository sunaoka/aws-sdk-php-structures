<?php

namespace Sunaoka\Aws\Structures\Connect\SearchRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RulesSearchCriteria>|null $OrConditions
 * @property list<RulesSearchCriteria>|null $AndConditions
 * @property StringCondition|null $StringCondition
 */
class RulesSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<RulesSearchCriteria>|null,
     *     AndConditions?: list<RulesSearchCriteria>|null,
     *     StringCondition?: StringCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
