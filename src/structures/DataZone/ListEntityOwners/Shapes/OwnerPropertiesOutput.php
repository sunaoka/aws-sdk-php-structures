<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEntityOwners\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OwnerGroupPropertiesOutput|null $group
 * @property OwnerUserPropertiesOutput|null $user
 */
class OwnerPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     group?: OwnerGroupPropertiesOutput|null,
     *     user?: OwnerUserPropertiesOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
