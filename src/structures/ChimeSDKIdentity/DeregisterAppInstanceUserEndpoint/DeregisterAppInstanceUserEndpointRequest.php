<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DeregisterAppInstanceUserEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceUserArn
 * @property string $EndpointId
 */
class DeregisterAppInstanceUserEndpointRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceUserArn: string,
     *     EndpointId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
