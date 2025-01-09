<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateInstanceStorageConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KMS' $EncryptionType
 * @property string $KeyId
 */
class EncryptionConfig extends Shape
{
    /**
     * @param array{
     *     EncryptionType: 'KMS',
     *     KeyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
