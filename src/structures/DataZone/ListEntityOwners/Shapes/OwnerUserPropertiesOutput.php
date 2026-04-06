<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEntityOwners\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userId
 */
class OwnerUserPropertiesOutput extends Shape
{
    /**
     * @param array{userId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
