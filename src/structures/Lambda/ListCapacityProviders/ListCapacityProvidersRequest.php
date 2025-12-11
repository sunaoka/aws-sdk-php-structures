<?php

namespace Sunaoka\Aws\Structures\Lambda\ListCapacityProviders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Pending'|'Active'|'Failed'|'Deleting'|null $State
 * @property string|null $Marker
 * @property int<1, 50>|null $MaxItems
 */
class ListCapacityProvidersRequest extends Request
{
    /**
     * @param array{
     *     State?: 'Pending'|'Active'|'Failed'|'Deleting'|null,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
