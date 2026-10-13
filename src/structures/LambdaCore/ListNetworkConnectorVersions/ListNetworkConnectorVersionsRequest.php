<?php

namespace Sunaoka\Aws\Structures\LambdaCore\ListNetworkConnectorVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'FAILED'|'DELETING'|'DELETE_FAILED'|null $State
 * @property string|null $Marker
 * @property int<1, 100>|null $MaxItems
 */
class ListNetworkConnectorVersionsRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     State?: 'PENDING'|'ACTIVE'|'INACTIVE'|'FAILED'|'DELETING'|'DELETE_FAILED'|null,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
