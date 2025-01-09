<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchIsAuthorized\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entityType
 * @property string $entityId
 */
class EntityIdentifier extends Shape
{
    /**
     * @param array{
     *     entityType: string,
     *     entityId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
