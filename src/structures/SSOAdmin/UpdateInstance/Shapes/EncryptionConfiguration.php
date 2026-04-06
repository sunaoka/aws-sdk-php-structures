<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdateInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_OWNED_KMS_KEY'|'CUSTOMER_MANAGED_KEY' $KeyType
 * @property string|null $KmsKeyArn
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     KeyType: 'AWS_OWNED_KMS_KEY'|'CUSTOMER_MANAGED_KEY',
     *     KmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
