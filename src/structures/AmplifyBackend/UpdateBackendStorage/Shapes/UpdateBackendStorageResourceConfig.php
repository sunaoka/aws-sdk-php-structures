<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendStorage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BackendStoragePermissions $Permissions
 * @property 'S3' $ServiceName
 */
class UpdateBackendStorageResourceConfig extends Shape
{
    /**
     * @param array{
     *     Permissions: BackendStoragePermissions,
     *     ServiceName: 'S3'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
