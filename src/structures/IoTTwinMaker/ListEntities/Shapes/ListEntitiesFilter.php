<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $parentEntityId
 * @property string $componentTypeId
 * @property string $externalId
 */
class ListEntitiesFilter extends Shape
{
    /**
     * @param array{
     *     parentEntityId?: string,
     *     componentTypeId?: string,
     *     externalId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
