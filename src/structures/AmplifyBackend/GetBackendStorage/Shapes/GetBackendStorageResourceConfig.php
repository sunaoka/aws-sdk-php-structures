<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetBackendStorage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BucketName
 * @property bool $Imported
 * @property BackendStoragePermissions|null $Permissions
 * @property 'S3' $ServiceName
 */
class GetBackendStorageResourceConfig extends Shape
{
    /**
     * @param array{
     *     BucketName?: string|null,
     *     Imported: bool,
     *     Permissions?: BackendStoragePermissions|null,
     *     ServiceName: 'S3'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
