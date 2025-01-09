<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataCatalogEncryptionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ReturnConnectionPasswordEncrypted
 * @property string $AwsKmsKeyId
 */
class ConnectionPasswordEncryption extends Shape
{
    /**
     * @param array{
     *     ReturnConnectionPasswordEncrypted: bool,
     *     AwsKmsKeyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
