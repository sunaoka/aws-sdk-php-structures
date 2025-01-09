<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEntityOwners\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OwnerGroupPropertiesOutput $group
 * @property OwnerUserPropertiesOutput $user
 */
class OwnerPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     group?: OwnerGroupPropertiesOutput,
     *     user?: OwnerUserPropertiesOutput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
