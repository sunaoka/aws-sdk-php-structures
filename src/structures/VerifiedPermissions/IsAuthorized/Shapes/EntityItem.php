<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\IsAuthorized\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EntityIdentifier $identifier
 * @property array<string, AttributeValue> $attributes
 * @property list<EntityIdentifier> $parents
 */
class EntityItem extends Shape
{
    /**
     * @param array{
     *     identifier: EntityIdentifier,
     *     attributes?: array<string, AttributeValue>,
     *     parents?: list<EntityIdentifier>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
