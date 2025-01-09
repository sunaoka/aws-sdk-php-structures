<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetBackend;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 * @property string $BackendEnvironmentName
 */
class GetBackendRequest extends Request
{
    /**
     * @param array{
     *     AppId: string,
     *     BackendEnvironmentName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
