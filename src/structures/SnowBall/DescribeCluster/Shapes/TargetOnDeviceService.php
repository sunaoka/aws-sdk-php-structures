<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NFS_ON_DEVICE_SERVICE'|'S3_ON_DEVICE_SERVICE' $ServiceName
 * @property 'IMPORT'|'EXPORT'|'LOCAL_USE' $TransferOption
 */
class TargetOnDeviceService extends Shape
{
    /**
     * @param array{
     *     ServiceName?: 'NFS_ON_DEVICE_SERVICE'|'S3_ON_DEVICE_SERVICE',
     *     TransferOption?: 'IMPORT'|'EXPORT'|'LOCAL_USE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
