<?php

namespace Sunaoka\Aws\Structures\Amplify\DeleteBackendEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $environmentName
 */
class DeleteBackendEnvironmentRequest extends Request
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
