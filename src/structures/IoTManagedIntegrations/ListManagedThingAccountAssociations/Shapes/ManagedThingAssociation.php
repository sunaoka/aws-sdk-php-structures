<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListManagedThingAccountAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ManagedThingId
 * @property string|null $AccountAssociationId
 * @property 'PRE_ASSOCIATED'|'ASSOCIATED'|null $ManagedThingAssociationStatus
 */
class ManagedThingAssociation extends Shape
{
    /**
     * @param array{
     *     ManagedThingId?: string|null,
     *     AccountAssociationId?: string|null,
     *     ManagedThingAssociationStatus?: 'PRE_ASSOCIATED'|'ASSOCIATED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
