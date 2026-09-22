<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\UpdateSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_OWNED'|'CUSTOMER_MANAGED' $encryptionStrategy
 * @property string|null $kmsKeyArn
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     encryptionStrategy: 'AWS_OWNED'|'CUSTOMER_MANAGED',
     *     kmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
