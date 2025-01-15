<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\ImportBackendAuth;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 * @property string $BackendEnvironmentName
 * @property string|null $IdentityPoolId
 * @property string $NativeClientId
 * @property string $UserPoolId
 * @property string $WebClientId
 */
class ImportBackendAuthRequest extends Request
{
    /**
     * @param array{
     *     AppId: string,
     *     BackendEnvironmentName: string,
     *     IdentityPoolId?: string|null,
     *     NativeClientId: string,
     *     UserPoolId: string,
     *     WebClientId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
