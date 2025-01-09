<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CloneBackend;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 * @property string $BackendEnvironmentName
 * @property string $TargetEnvironmentName
 */
class CloneBackendRequest extends Request
{
    /**
     * @param array{
     *     AppId: string,
     *     BackendEnvironmentName: string,
     *     TargetEnvironmentName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
