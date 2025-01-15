<?php

namespace Sunaoka\Aws\Structures\S3Control\GetStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SSES3|null $SSES3
 * @property SSEKMS|null $SSEKMS
 */
class StorageLensDataExportEncryption extends Shape
{
    /**
     * @param array{
     *     SSES3?: SSES3|null,
     *     SSEKMS?: SSEKMS|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
