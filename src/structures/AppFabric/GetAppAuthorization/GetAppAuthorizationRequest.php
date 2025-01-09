<?php

namespace Sunaoka\Aws\Structures\AppFabric\GetAppAuthorization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appBundleIdentifier
 * @property string $appAuthorizationIdentifier
 */
class GetAppAuthorizationRequest extends Request
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
