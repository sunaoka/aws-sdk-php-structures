<?php

namespace Sunaoka\Aws\Structures\Connect\SearchPrompts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PromptSearchCriteria>|null $OrConditions
 * @property list<PromptSearchCriteria>|null $AndConditions
 * @property StringCondition|null $StringCondition
 */
class PromptSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<PromptSearchCriteria>|null,
     *     AndConditions?: list<PromptSearchCriteria>|null,
     *     StringCondition?: StringCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
