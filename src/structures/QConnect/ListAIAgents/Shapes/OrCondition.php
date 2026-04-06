<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TagCondition>|null $andConditions
 * @property TagCondition|null $tagCondition
 */
class OrCondition extends Shape
{
    /**
     * @param array{
     *     andConditions?: list<TagCondition>|null,
     *     tagCondition?: TagCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
