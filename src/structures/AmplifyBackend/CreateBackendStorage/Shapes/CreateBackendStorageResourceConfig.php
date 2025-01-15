<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CreateBackendStorage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BucketName
 * @property BackendStoragePermissions $Permissions
 * @property 'S3' $ServiceName
 */
class CreateBackendStorageResourceConfig extends Shape
{
    /**
     * @param array{
     *     BucketName?: string|null,
     *     Permissions: BackendStoragePermissions,
     *     ServiceName: 'S3'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
