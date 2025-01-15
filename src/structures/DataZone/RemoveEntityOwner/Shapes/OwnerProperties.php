<?php

namespace Sunaoka\Aws\Structures\DataZone\RemoveEntityOwner\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OwnerGroupProperties|null $group
 * @property OwnerUserProperties|null $user
 */
class OwnerProperties extends Shape
{
    /**
     * @param array{
     *     group?: OwnerGroupProperties|null,
     *     user?: OwnerUserProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
