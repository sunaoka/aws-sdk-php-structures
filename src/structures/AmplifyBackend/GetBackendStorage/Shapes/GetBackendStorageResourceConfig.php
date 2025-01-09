<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetBackendStorage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property bool $Imported
 * @property BackendStoragePermissions $Permissions
 * @property 'S3' $ServiceName
 */
class GetBackendStorageResourceConfig extends Shape
{
    /**
     * @param array{
     *     BucketName?: string,
     *     Imported: bool,
     *     Permissions?: BackendStoragePermissions,
     *     ServiceName: 'S3'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
