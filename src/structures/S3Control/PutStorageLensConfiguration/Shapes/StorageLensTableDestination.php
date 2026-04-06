<?php

namespace Sunaoka\Aws\Structures\S3Control\PutStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IsEnabled
 * @property StorageLensDataExportEncryption|null $Encryption
 */
class StorageLensTableDestination extends Shape
{
    /**
     * @param array{
     *     IsEnabled: bool,
     *     Encryption?: StorageLensDataExportEncryption|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
