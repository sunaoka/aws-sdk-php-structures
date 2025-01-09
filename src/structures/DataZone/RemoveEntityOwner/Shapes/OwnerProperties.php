<?php

namespace Sunaoka\Aws\Structures\DataZone\RemoveEntityOwner\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OwnerGroupProperties $group
 * @property OwnerUserProperties $user
 */
class OwnerProperties extends Shape
{
    /**
     * @param array{
     *     group?: OwnerGroupProperties,
     *     user?: OwnerUserProperties
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
