<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListManagedThingAccountAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ManagedThingId
 * @property string|null $AccountAssociationId
 */
class ManagedThingAssociation extends Shape
{
    /**
     * @param array{
     *     ManagedThingId?: string|null,
     *     AccountAssociationId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
