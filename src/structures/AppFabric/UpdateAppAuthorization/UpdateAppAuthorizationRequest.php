<?php

namespace Sunaoka\Aws\Structures\AppFabric\UpdateAppAuthorization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appBundleIdentifier
 * @property string $appAuthorizationIdentifier
 * @property Shapes\Credential $credential
 * @property Shapes\Tenant $tenant
 */
class UpdateAppAuthorizationRequest extends Request
{
    /**
     * @param array{
     *     appBundleIdentifier: string,
     *     appAuthorizationIdentifier: string,
     *     credential?: Shapes\Credential,
     *     tenant?: Shapes\Tenant
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
