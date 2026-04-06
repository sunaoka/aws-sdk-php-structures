<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchIsAuthorizedWithToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EntityItem>|null $entityList
 */
class EntitiesDefinition extends Shape
{
    /**
     * @param array{entityList?: list<EntityItem>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
