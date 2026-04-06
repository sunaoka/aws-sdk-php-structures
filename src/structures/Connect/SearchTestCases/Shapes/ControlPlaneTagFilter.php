<?php

namespace Sunaoka\Aws\Structures\Connect\SearchTestCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<list<TagCondition>>|null $OrConditions
 * @property list<TagCondition>|null $AndConditions
 * @property TagCondition|null $TagCondition
 */
class ControlPlaneTagFilter extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<list<TagCondition>>|null,
     *     AndConditions?: list<TagCondition>|null,
     *     TagCondition?: TagCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
