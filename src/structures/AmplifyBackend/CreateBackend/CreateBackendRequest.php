<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CreateBackend;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 * @property string $AppName
 * @property string $BackendEnvironmentName
 * @property Shapes\ResourceConfig|null $ResourceConfig
 * @property string|null $ResourceName
 */
class CreateBackendRequest extends Request
{
    /**
     * @param array{
     *     AppId: string,
     *     AppName: string,
     *     BackendEnvironmentName: string,
     *     ResourceConfig?: Shapes\ResourceConfig|null,
     *     ResourceName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
