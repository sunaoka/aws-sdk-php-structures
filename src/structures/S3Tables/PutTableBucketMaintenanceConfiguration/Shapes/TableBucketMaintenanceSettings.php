<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableBucketMaintenanceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IcebergUnreferencedFileRemovalSettings|null $icebergUnreferencedFileRemoval
 */
class TableBucketMaintenanceSettings extends Shape
{
    /**
     * @param array{icebergUnreferencedFileRemoval?: IcebergUnreferencedFileRemovalSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
