<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CORE_NETWORK_SEGMENT'|'NETWORK_FUNCTION_GROUP'|'CORE_NETWORK_EDGE'|'ATTACHMENT_MAPPING'|'ATTACHMENT_ROUTE_PROPAGATION'|'ATTACHMENT_ROUTE_STATIC'|'CORE_NETWORK_CONFIGURATION'|'SEGMENTS_CONFIGURATION'|'SEGMENT_ACTIONS_CONFIGURATION'|'ATTACHMENT_POLICIES_CONFIGURATION'|null $Type
 * @property 'ADD'|'MODIFY'|'REMOVE'|null $Action
 * @property string|null $Identifier
 * @property CoreNetworkChangeValues|null $PreviousValues
 * @property CoreNetworkChangeValues|null $NewValues
 * @property string|null $IdentifierPath
 */
class CoreNetworkChange extends Shape
{
    /**
     * @param array{
     *     Type?: 'CORE_NETWORK_SEGMENT'|'NETWORK_FUNCTION_GROUP'|'CORE_NETWORK_EDGE'|'ATTACHMENT_MAPPING'|'ATTACHMENT_ROUTE_PROPAGATION'|'ATTACHMENT_ROUTE_STATIC'|'CORE_NETWORK_CONFIGURATION'|'SEGMENTS_CONFIGURATION'|'SEGMENT_ACTIONS_CONFIGURATION'|'ATTACHMENT_POLICIES_CONFIGURATION'|null,
     *     Action?: 'ADD'|'MODIFY'|'REMOVE'|null,
     *     Identifier?: string|null,
     *     PreviousValues?: CoreNetworkChangeValues|null,
     *     NewValues?: CoreNetworkChangeValues|null,
     *     IdentifierPath?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
