<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\UpdateAppInstanceUserEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceUserArn
 * @property string $EndpointId
 * @property string|null $Name
 * @property 'ALL'|'NONE'|null $AllowMessages
 */
class UpdateAppInstanceUserEndpointRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceUserArn: string,
     *     EndpointId: string,
     *     Name?: string|null,
     *     AllowMessages?: 'ALL'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
