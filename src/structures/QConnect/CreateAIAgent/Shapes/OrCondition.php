<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TagCondition> $andConditions
 * @property TagCondition $tagCondition
 */
class OrCondition extends Shape
{
    /**
     * @param array{
     *     andConditions?: list<TagCondition>,
     *     tagCondition?: TagCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
