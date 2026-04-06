<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableMaintenanceConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 * @property string $namespace
 * @property string $name
 * @property 'icebergCompaction'|'icebergSnapshotManagement' $type
 * @property Shapes\TableMaintenanceConfigurationValue $value
 */
class PutTableMaintenanceConfigurationRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN: string,
     *     namespace: string,
     *     name: string,
     *     type: 'icebergCompaction'|'icebergSnapshotManagement',
     *     value: Shapes\TableMaintenanceConfigurationValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
