<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CUSTOMER_MANAGED_KMS_KEY'|'AWS_OWNED_KMS_KEY' $type
 * @property string $kmsKeyIdentifier
 */
class EncryptionSpecification extends Shape
{
    /**
     * @param array{
     *     type: 'CUSTOMER_MANAGED_KMS_KEY'|'AWS_OWNED_KMS_KEY',
     *     kmsKeyIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
