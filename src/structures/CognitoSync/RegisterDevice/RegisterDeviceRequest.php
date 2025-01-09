<?php

namespace Sunaoka\Aws\Structures\CognitoSync\RegisterDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 * @property string $IdentityId
 * @property 'APNS'|'APNS_SANDBOX'|'GCM'|'ADM' $Platform
 * @property string $Token
 */
class RegisterDeviceRequest extends Request
{
    /**
     * @param array{
     *     IdentityPoolId: string,
     *     IdentityId: string,
     *     Platform: 'APNS'|'APNS_SANDBOX'|'GCM'|'ADM',
     *     Token: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
