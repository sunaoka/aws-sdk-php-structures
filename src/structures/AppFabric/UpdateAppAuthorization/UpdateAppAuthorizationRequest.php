<?php

namespace Sunaoka\Aws\Structures\AppFabric\UpdateAppAuthorization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appBundleIdentifier
 * @property string $appAuthorizationIdentifier
 * @property Shapes\Credential|null $credential
 * @property Shapes\Tenant|null $tenant
 */
class UpdateAppAuthorizationRequest extends Request
{
    /**
     * @param array{
     *     appBundleIdentifier: string,
     *     appAuthorizationIdentifier: string,
     *     credential?: Shapes\Credential|null,
     *     tenant?: Shapes\Tenant|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
