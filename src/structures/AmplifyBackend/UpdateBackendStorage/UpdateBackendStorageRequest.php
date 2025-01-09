<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendStorage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 * @property string $BackendEnvironmentName
 * @property Shapes\UpdateBackendStorageResourceConfig $ResourceConfig
 * @property string $ResourceName
 */
class UpdateBackendStorageRequest extends Request
{
    /**
     * @param array{
     *     AppId: string,
     *     BackendEnvironmentName: string,
     *     ResourceConfig: Shapes\UpdateBackendStorageResourceConfig,
     *     ResourceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
