<?php

namespace Sunaoka\Aws\Structures\Glue\PutDataCatalogEncryptionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EncryptionAtRest $EncryptionAtRest
 * @property ConnectionPasswordEncryption $ConnectionPasswordEncryption
 */
class DataCatalogEncryptionSettings extends Shape
{
    /**
     * @param array{
     *     EncryptionAtRest?: EncryptionAtRest,
     *     ConnectionPasswordEncryption?: ConnectionPasswordEncryption
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
