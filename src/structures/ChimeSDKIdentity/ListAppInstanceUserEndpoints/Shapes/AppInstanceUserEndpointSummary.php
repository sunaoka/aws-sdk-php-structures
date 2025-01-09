<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\ListAppInstanceUserEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppInstanceUserArn
 * @property string $EndpointId
 * @property string $Name
 * @property 'APNS'|'APNS_SANDBOX'|'GCM' $Type
 * @property 'ALL'|'NONE' $AllowMessages
 * @property EndpointState $EndpointState
 */
class AppInstanceUserEndpointSummary extends Shape
{
    /**
     * @param array{
     *     AppInstanceUserArn?: string,
     *     EndpointId?: string,
     *     Name?: string,
     *     Type?: 'APNS'|'APNS_SANDBOX'|'GCM',
     *     AllowMessages?: 'ALL'|'NONE',
     *     EndpointState?: EndpointState
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
