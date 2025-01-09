<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchIsAuthorized\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EntityItem> $entityList
 */
class EntitiesDefinition extends Shape
{
    /**
     * @param array{entityList?: list<EntityItem>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
