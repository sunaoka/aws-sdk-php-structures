<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyId
 * @property string $EncryptedKeyMetadata
 * @property string|null $EncryptedById
 * @property array<string, string>|null $Properties
 */
class IcebergEncryptedKey extends Shape
{
    /**
     * @param array{
     *     KeyId: string,
     *     EncryptedKeyMetadata: string,
     *     EncryptedById?: string|null,
     *     Properties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
