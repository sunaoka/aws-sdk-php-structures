<?php

namespace Sunaoka\Aws\Structures\DataZone\QueryGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RelationPattern|null $relationPattern
 * @property EntityPattern|null $entityPattern
 */
class MatchClause extends Shape
{
    /**
     * @param array{
     *     relationPattern?: RelationPattern|null,
     *     entityPattern?: EntityPattern|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
