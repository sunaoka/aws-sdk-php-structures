<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TagCondition>|null $andConditions
 * @property list<OrCondition>|null $orConditions
 * @property TagCondition|null $tagCondition
 */
class TagFilter extends Shape
{
    /**
     * @param array{
     *     andConditions?: list<TagCondition>|null,
     *     orConditions?: list<OrCondition>|null,
     *     tagCondition?: TagCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
