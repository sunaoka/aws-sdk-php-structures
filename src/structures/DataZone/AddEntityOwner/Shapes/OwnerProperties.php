<?php

namespace Sunaoka\Aws\Structures\DataZone\AddEntityOwner\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OwnerUserProperties|null $user
 * @property OwnerGroupProperties|null $group
 */
class OwnerProperties extends Shape
{
    /**
     * @param array{
     *     user?: OwnerUserProperties|null,
     *     group?: OwnerGroupProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
