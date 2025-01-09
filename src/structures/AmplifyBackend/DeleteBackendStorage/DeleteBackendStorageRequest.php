<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\DeleteBackendStorage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 * @property string $BackendEnvironmentName
 * @property string $ResourceName
 * @property 'S3' $ServiceName
 */
class DeleteBackendStorageRequest extends Request
{
    /**
     * @param array{
     *     AppId: string,
     *     BackendEnvironmentName: string,
     *     ResourceName: string,
     *     ServiceName: 'S3'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
