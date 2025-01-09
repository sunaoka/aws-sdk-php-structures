<?php

namespace Sunaoka\Aws\Structures\Amplify\GetBackendEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $environmentName
 */
class GetBackendEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
