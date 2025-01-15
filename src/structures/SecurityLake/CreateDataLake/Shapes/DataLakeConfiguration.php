<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateDataLake\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataLakeEncryptionConfiguration|null $encryptionConfiguration
 * @property DataLakeLifecycleConfiguration|null $lifecycleConfiguration
 * @property string $region
 * @property DataLakeReplicationConfiguration|null $replicationConfiguration
 */
class DataLakeConfiguration extends Shape
{
    /**
     * @param array{
     *     encryptionConfiguration?: DataLakeEncryptionConfiguration|null,
     *     lifecycleConfiguration?: DataLakeLifecycleConfiguration|null,
     *     region: string,
     *     replicationConfiguration?: DataLakeReplicationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
