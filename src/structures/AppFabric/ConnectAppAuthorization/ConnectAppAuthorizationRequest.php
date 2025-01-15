<?php

namespace Sunaoka\Aws\Structures\AppFabric\ConnectAppAuthorization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appBundleIdentifier
 * @property string $appAuthorizationIdentifier
 * @property Shapes\AuthRequest|null $authRequest
 */
class ConnectAppAuthorizationRequest extends Request
{
    /**
     * @param array{
     *     appBundleIdentifier: string,
     *     appAuthorizationIdentifier: string,
     *     authRequest?: Shapes\AuthRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
