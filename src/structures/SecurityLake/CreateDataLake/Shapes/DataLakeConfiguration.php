<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateDataLake\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataLakeEncryptionConfiguration $encryptionConfiguration
 * @property DataLakeLifecycleConfiguration $lifecycleConfiguration
 * @property string $region
 * @property DataLakeReplicationConfiguration $replicationConfiguration
 */
class DataLakeConfiguration extends Shape
{
    /**
     * @param array{
     *     encryptionConfiguration?: DataLakeEncryptionConfiguration,
     *     lifecycleConfiguration?: DataLakeLifecycleConfiguration,
     *     region: string,
     *     replicationConfiguration?: DataLakeReplicationConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
