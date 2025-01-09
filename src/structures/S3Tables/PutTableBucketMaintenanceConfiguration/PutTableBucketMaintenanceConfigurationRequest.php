<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableBucketMaintenanceConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 * @property 'icebergUnreferencedFileRemoval' $type
 * @property Shapes\TableBucketMaintenanceConfigurationValue $value
 */
class PutTableBucketMaintenanceConfigurationRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN: string,
     *     type: 'icebergUnreferencedFileRemoval',
     *     value: Shapes\TableBucketMaintenanceConfigurationValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
