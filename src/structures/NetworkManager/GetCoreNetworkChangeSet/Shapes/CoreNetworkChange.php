<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CORE_NETWORK_SEGMENT'|'NETWORK_FUNCTION_GROUP'|'CORE_NETWORK_EDGE'|'ATTACHMENT_MAPPING'|'ATTACHMENT_ROUTE_PROPAGATION'|'ATTACHMENT_ROUTE_STATIC'|'CORE_NETWORK_CONFIGURATION'|'SEGMENTS_CONFIGURATION'|'SEGMENT_ACTIONS_CONFIGURATION'|'ATTACHMENT_POLICIES_CONFIGURATION' $Type
 * @property 'ADD'|'MODIFY'|'REMOVE' $Action
 * @property string $Identifier
 * @property CoreNetworkChangeValues $PreviousValues
 * @property CoreNetworkChangeValues $NewValues
 * @property string $IdentifierPath
 */
class CoreNetworkChange extends Shape
{
    /**
     * @param array{
     *     Type?: 'CORE_NETWORK_SEGMENT'|'NETWORK_FUNCTION_GROUP'|'CORE_NETWORK_EDGE'|'ATTACHMENT_MAPPING'|'ATTACHMENT_ROUTE_PROPAGATION'|'ATTACHMENT_ROUTE_STATIC'|'CORE_NETWORK_CONFIGURATION'|'SEGMENTS_CONFIGURATION'|'SEGMENT_ACTIONS_CONFIGURATION'|'ATTACHMENT_POLICIES_CONFIGURATION',
     *     Action?: 'ADD'|'MODIFY'|'REMOVE',
     *     Identifier?: string,
     *     PreviousValues?: CoreNetworkChangeValues,
     *     NewValues?: CoreNetworkChangeValues,
     *     IdentifierPath?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
