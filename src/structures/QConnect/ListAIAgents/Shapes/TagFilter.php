<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TagCondition|null $tagCondition
 * @property list<TagCondition>|null $andConditions
 * @property list<OrCondition>|null $orConditions
 */
class TagFilter extends Shape
{
    /**
     * @param array{
     *     tagCondition?: TagCondition|null,
     *     andConditions?: list<TagCondition>|null,
     *     orConditions?: list<OrCondition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
