<?php

namespace Sunaoka\Aws\Structures\Glue\PutDataCatalogEncryptionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EncryptionAtRest|null $EncryptionAtRest
 * @property ConnectionPasswordEncryption|null $ConnectionPasswordEncryption
 */
class DataCatalogEncryptionSettings extends Shape
{
    /**
     * @param array{
     *     EncryptionAtRest?: EncryptionAtRest|null,
     *     ConnectionPasswordEncryption?: ConnectionPasswordEncryption|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
