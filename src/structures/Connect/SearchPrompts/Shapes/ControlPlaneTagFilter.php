<?php

namespace Sunaoka\Aws\Structures\Connect\SearchPrompts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<list<TagCondition>> $OrConditions
 * @property list<TagCondition> $AndConditions
 * @property TagCondition $TagCondition
 */
class ControlPlaneTagFilter extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<list<TagCondition>>,
     *     AndConditions?: list<TagCondition>,
     *     TagCondition?: TagCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
