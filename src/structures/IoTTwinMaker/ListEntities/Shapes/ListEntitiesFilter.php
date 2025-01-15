<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $parentEntityId
 * @property string|null $componentTypeId
 * @property string|null $externalId
 */
class ListEntitiesFilter extends Shape
{
    /**
     * @param array{
     *     parentEntityId?: string|null,
     *     componentTypeId?: string|null,
     *     externalId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
