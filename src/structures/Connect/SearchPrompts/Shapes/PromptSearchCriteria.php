<?php

namespace Sunaoka\Aws\Structures\Connect\SearchPrompts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PromptSearchCriteria> $OrConditions
 * @property list<PromptSearchCriteria> $AndConditions
 * @property StringCondition $StringCondition
 */
class PromptSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<PromptSearchCriteria>,
     *     AndConditions?: list<PromptSearchCriteria>,
     *     StringCondition?: StringCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
