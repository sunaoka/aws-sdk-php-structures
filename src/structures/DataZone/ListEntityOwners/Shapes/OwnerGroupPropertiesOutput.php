<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEntityOwners\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groupId
 */
class OwnerGroupPropertiesOutput extends Shape
{
    /**
     * @param array{groupId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
