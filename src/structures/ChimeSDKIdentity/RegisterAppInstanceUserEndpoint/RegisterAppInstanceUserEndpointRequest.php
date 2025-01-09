<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\RegisterAppInstanceUserEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceUserArn
 * @property string $Name
 * @property 'APNS'|'APNS_SANDBOX'|'GCM' $Type
 * @property string $ResourceArn
 * @property Shapes\EndpointAttributes $EndpointAttributes
 * @property string $ClientRequestToken
 * @property 'ALL'|'NONE' $AllowMessages
 */
class RegisterAppInstanceUserEndpointRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceUserArn: string,
     *     Name?: string,
     *     Type: 'APNS'|'APNS_SANDBOX'|'GCM',
     *     ResourceArn: string,
     *     EndpointAttributes: Shapes\EndpointAttributes,
     *     ClientRequestToken: string,
     *     AllowMessages?: 'ALL'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
