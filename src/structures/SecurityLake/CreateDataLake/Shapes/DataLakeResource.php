<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateDataLake\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INITIALIZED'|'PENDING'|'COMPLETED'|'FAILED' $createStatus
 * @property string $dataLakeArn
 * @property DataLakeEncryptionConfiguration $encryptionConfiguration
 * @property DataLakeLifecycleConfiguration $lifecycleConfiguration
 * @property string $region
 * @property DataLakeReplicationConfiguration $replicationConfiguration
 * @property string $s3BucketArn
 * @property DataLakeUpdateStatus $updateStatus
 */
class DataLakeResource extends Shape
{
    /**
     * @param array{
     *     createStatus?: 'INITIALIZED'|'PENDING'|'COMPLETED'|'FAILED',
     *     dataLakeArn: string,
     *     encryptionConfiguration?: DataLakeEncryptionConfiguration,
     *     lifecycleConfiguration?: DataLakeLifecycleConfiguration,
     *     region: string,
     *     replicationConfiguration?: DataLakeReplicationConfiguration,
     *     s3BucketArn?: string,
     *     updateStatus?: DataLakeUpdateStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
