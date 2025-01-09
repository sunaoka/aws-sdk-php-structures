<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TagCondition> $andConditions
 * @property list<OrCondition> $orConditions
 * @property TagCondition $tagCondition
 */
class TagFilter extends Shape
{
    /**
     * @param array{
     *     andConditions?: list<TagCondition>,
     *     orConditions?: list<OrCondition>,
     *     tagCondition?: TagCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
