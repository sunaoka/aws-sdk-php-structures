<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendAuth;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 * @property string $BackendEnvironmentName
 * @property Shapes\UpdateBackendAuthResourceConfig $ResourceConfig
 * @property string $ResourceName
 */
class UpdateBackendAuthRequest extends Request
{
    /**
     * @param array{
     *     AppId: string,
     *     BackendEnvironmentName: string,
     *     ResourceConfig: Shapes\UpdateBackendAuthResourceConfig,
     *     ResourceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
