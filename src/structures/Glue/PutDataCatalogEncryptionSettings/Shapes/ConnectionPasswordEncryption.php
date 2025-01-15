<?php

namespace Sunaoka\Aws\Structures\Glue\PutDataCatalogEncryptionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ReturnConnectionPasswordEncrypted
 * @property string|null $AwsKmsKeyId
 */
class ConnectionPasswordEncryption extends Shape
{
    /**
     * @param array{
     *     ReturnConnectionPasswordEncrypted: bool,
     *     AwsKmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
