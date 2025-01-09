<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendAPI;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 * @property string $BackendEnvironmentName
 * @property Shapes\BackendAPIResourceConfig $ResourceConfig
 * @property string $ResourceName
 */
class UpdateBackendAPIRequest extends Request
{
    /**
     * @param array{
     *     AppId: string,
     *     BackendEnvironmentName: string,
     *     ResourceConfig?: Shapes\BackendAPIResourceConfig,
     *     ResourceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
