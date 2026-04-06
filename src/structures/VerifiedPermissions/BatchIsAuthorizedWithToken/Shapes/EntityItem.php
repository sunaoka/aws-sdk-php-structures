<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchIsAuthorizedWithToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EntityIdentifier $identifier
 * @property array<string, AttributeValue>|null $attributes
 * @property list<EntityIdentifier>|null $parents
 */
class EntityItem extends Shape
{
    /**
     * @param array{
     *     identifier: EntityIdentifier,
     *     attributes?: array<string, AttributeValue>|null,
     *     parents?: list<EntityIdentifier>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
