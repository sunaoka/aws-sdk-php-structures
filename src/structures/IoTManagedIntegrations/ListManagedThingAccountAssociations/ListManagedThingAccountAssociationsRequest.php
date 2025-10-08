<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListManagedThingAccountAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ManagedThingId
 * @property string|null $AccountAssociationId
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListManagedThingAccountAssociationsRequest extends Request
{
    /**
     * @param array{
     *     ManagedThingId?: string|null,
     *     AccountAssociationId?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
