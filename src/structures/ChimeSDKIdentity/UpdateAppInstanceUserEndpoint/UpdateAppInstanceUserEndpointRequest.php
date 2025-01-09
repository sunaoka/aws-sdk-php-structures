<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\UpdateAppInstanceUserEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceUserArn
 * @property string $EndpointId
 * @property string $Name
 * @property 'ALL'|'NONE' $AllowMessages
 */
class UpdateAppInstanceUserEndpointRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceUserArn: string,
     *     EndpointId: string,
     *     Name?: string,
     *     AllowMessages?: 'ALL'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
