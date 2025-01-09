<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\ImportBackendStorage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 * @property string $BackendEnvironmentName
 * @property string $BucketName
 * @property 'S3' $ServiceName
 */
class ImportBackendStorageRequest extends Request
{
    /**
     * @param array{
     *     AppId: string,
     *     BackendEnvironmentName: string,
     *     BucketName?: string,
     *     ServiceName: 'S3'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
