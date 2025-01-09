<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableBucketMaintenanceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IcebergUnreferencedFileRemovalSettings $icebergUnreferencedFileRemoval
 */
class TableBucketMaintenanceSettings extends Shape
{
    /**
     * @param array{icebergUnreferencedFileRemoval?: IcebergUnreferencedFileRemovalSettings} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
