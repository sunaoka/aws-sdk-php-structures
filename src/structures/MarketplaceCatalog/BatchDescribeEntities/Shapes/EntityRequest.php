<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\BatchDescribeEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Catalog
 * @property string $EntityId
 */
class EntityRequest extends Shape
{
    /**
     * @param array{
     *     Catalog: string,
     *     EntityId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
