<?php

namespace Sunaoka\Aws\Structures\SSOOIDC\StartDeviceAuthorization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientId
 * @property string $clientSecret
 * @property string $startUrl
 */
class StartDeviceAuthorizationRequest extends Request
{
    /**
     * @param array{
     *     clientId: string,
     *     clientSecret: string,
     *     startUrl: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
