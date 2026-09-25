<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PUBLIC'|null $EncryptionType
 * @property TlsEncryptionConfiguration $EncryptionConfiguration
 */
class TlsEncryption extends Shape
{
    /**
     * @param array{
     *     EncryptionType?: 'PUBLIC'|null,
     *     EncryptionConfiguration: TlsEncryptionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
