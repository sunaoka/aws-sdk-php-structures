<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEntityOwners\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OwnerUserPropertiesOutput|null $user
 * @property OwnerGroupPropertiesOutput|null $group
 */
class OwnerPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     user?: OwnerUserPropertiesOutput|null,
     *     group?: OwnerGroupPropertiesOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
