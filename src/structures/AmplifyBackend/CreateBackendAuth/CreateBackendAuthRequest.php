<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CreateBackendAuth;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 * @property string $BackendEnvironmentName
 * @property Shapes\CreateBackendAuthResourceConfig $ResourceConfig
 * @property string $ResourceName
 */
class CreateBackendAuthRequest extends Request
{
    /**
     * @param array{
     *     AppId: string,
     *     BackendEnvironmentName: string,
     *     ResourceConfig: Shapes\CreateBackendAuthResourceConfig,
     *     ResourceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
