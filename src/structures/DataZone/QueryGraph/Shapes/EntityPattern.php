<?php

namespace Sunaoka\Aws\Structures\DataZone\QueryGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LINEAGE_NODE' $entityType
 * @property string $identifier
 * @property FilterClause|null $filters
 */
class EntityPattern extends Shape
{
    /**
     * @param array{
     *     entityType: 'LINEAGE_NODE',
     *     identifier: string,
     *     filters?: FilterClause|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
