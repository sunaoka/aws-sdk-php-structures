<?php

namespace Sunaoka\Aws\Structures\SecurityLake\ListDataLakes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INITIALIZED'|'PENDING'|'COMPLETED'|'FAILED'|null $createStatus
 * @property string $dataLakeArn
 * @property DataLakeEncryptionConfiguration|null $encryptionConfiguration
 * @property DataLakeLifecycleConfiguration|null $lifecycleConfiguration
 * @property string $region
 * @property DataLakeReplicationConfiguration|null $replicationConfiguration
 * @property string|null $s3BucketArn
 * @property DataLakeUpdateStatus|null $updateStatus
 */
class DataLakeResource extends Shape
{
    /**
     * @param array{
     *     createStatus?: 'INITIALIZED'|'PENDING'|'COMPLETED'|'FAILED'|null,
     *     dataLakeArn: string,
     *     encryptionConfiguration?: DataLakeEncryptionConfiguration|null,
     *     lifecycleConfiguration?: DataLakeLifecycleConfiguration|null,
     *     region: string,
     *     replicationConfiguration?: DataLakeReplicationConfiguration|null,
     *     s3BucketArn?: string|null,
     *     updateStatus?: DataLakeUpdateStatus|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
