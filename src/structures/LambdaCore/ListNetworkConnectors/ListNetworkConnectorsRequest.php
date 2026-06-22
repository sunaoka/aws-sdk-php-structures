<?php

namespace Sunaoka\Aws\Structures\LambdaCore\ListNetworkConnectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'FAILED'|'DELETING'|'DELETE_FAILED'|null $State
 * @property string|null $Marker
 * @property int<1, 100>|null $MaxItems
 */
class ListNetworkConnectorsRequest extends Request
{
    /**
     * @param array{
     *     State?: 'PENDING'|'ACTIVE'|'INACTIVE'|'FAILED'|'DELETING'|'DELETE_FAILED'|null,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
