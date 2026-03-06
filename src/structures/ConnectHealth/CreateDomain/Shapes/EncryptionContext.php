<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_OWNED_KEY'|'CUSTOMER_MANAGED_KEY' $encryptionType
 * @property string|null $kmsKeyArn
 */
class EncryptionContext extends Shape
{
    /**
     * @param array{
     *     encryptionType: 'AWS_OWNED_KEY'|'CUSTOMER_MANAGED_KEY',
     *     kmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
