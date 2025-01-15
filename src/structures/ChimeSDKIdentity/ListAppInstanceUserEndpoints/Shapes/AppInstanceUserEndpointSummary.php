<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\ListAppInstanceUserEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AppInstanceUserArn
 * @property string|null $EndpointId
 * @property string|null $Name
 * @property 'APNS'|'APNS_SANDBOX'|'GCM'|null $Type
 * @property 'ALL'|'NONE'|null $AllowMessages
 * @property EndpointState|null $EndpointState
 */
class AppInstanceUserEndpointSummary extends Shape
{
    /**
     * @param array{
     *     AppInstanceUserArn?: string|null,
     *     EndpointId?: string|null,
     *     Name?: string|null,
     *     Type?: 'APNS'|'APNS_SANDBOX'|'GCM'|null,
     *     AllowMessages?: 'ALL'|'NONE'|null,
     *     EndpointState?: EndpointState|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
