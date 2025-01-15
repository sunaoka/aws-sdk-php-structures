<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkChangeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CORE_NETWORK_SEGMENT'|'NETWORK_FUNCTION_GROUP'|'CORE_NETWORK_EDGE'|'ATTACHMENT_MAPPING'|'ATTACHMENT_ROUTE_PROPAGATION'|'ATTACHMENT_ROUTE_STATIC'|'CORE_NETWORK_CONFIGURATION'|'SEGMENTS_CONFIGURATION'|'SEGMENT_ACTIONS_CONFIGURATION'|'ATTACHMENT_POLICIES_CONFIGURATION'|null $Type
 * @property 'ADD'|'MODIFY'|'REMOVE'|null $Action
 * @property string|null $IdentifierPath
 * @property \Aws\Api\DateTimeResult|null $EventTime
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'FAILED'|null $Status
 * @property CoreNetworkChangeEventValues|null $Values
 */
class CoreNetworkChangeEvent extends Shape
{
    /**
     * @param array{
     *     Type?: 'CORE_NETWORK_SEGMENT'|'NETWORK_FUNCTION_GROUP'|'CORE_NETWORK_EDGE'|'ATTACHMENT_MAPPING'|'ATTACHMENT_ROUTE_PROPAGATION'|'ATTACHMENT_ROUTE_STATIC'|'CORE_NETWORK_CONFIGURATION'|'SEGMENTS_CONFIGURATION'|'SEGMENT_ACTIONS_CONFIGURATION'|'ATTACHMENT_POLICIES_CONFIGURATION'|null,
     *     Action?: 'ADD'|'MODIFY'|'REMOVE'|null,
     *     IdentifierPath?: string|null,
     *     EventTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'FAILED'|null,
     *     Values?: CoreNetworkChangeEventValues|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
