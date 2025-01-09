<?php

namespace Sunaoka\Aws\Structures\AppFabric\DeleteAppAuthorization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appBundleIdentifier
 * @property string $appAuthorizationIdentifier
 */
class DeleteAppAuthorizationRequest extends Request
{
    /**
     * @param array{
     *     appBundleIdentifier: string,
     *     appAuthorizationIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
