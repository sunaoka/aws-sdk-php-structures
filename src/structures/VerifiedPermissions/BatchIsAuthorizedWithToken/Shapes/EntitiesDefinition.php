<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchIsAuthorizedWithToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EntityItem>|null $entityList
 * @property string|null $cedarJson
 */
class EntitiesDefinition extends Shape
{
    /**
     * @param array{
     *     entityList?: list<EntityItem>|null,
     *     cedarJson?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
