<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CreateBackendStorage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 * @property string $BackendEnvironmentName
 * @property Shapes\CreateBackendStorageResourceConfig $ResourceConfig
 * @property string $ResourceName
 */
class CreateBackendStorageRequest extends Request
{
    /**
     * @param array{
     *     AppId: string,
     *     BackendEnvironmentName: string,
     *     ResourceConfig: Shapes\CreateBackendStorageResourceConfig,
     *     ResourceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
