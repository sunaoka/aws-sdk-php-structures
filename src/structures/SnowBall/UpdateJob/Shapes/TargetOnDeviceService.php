<?php

namespace Sunaoka\Aws\Structures\SnowBall\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NFS_ON_DEVICE_SERVICE'|'S3_ON_DEVICE_SERVICE'|null $ServiceName
 * @property 'IMPORT'|'EXPORT'|'LOCAL_USE'|null $TransferOption
 */
class TargetOnDeviceService extends Shape
{
    /**
     * @param array{
     *     ServiceName?: 'NFS_ON_DEVICE_SERVICE'|'S3_ON_DEVICE_SERVICE'|null,
     *     TransferOption?: 'IMPORT'|'EXPORT'|'LOCAL_USE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
