<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PublicTlsEncryptionConfiguration|null $Public
 */
class TlsEncryptionConfiguration extends Shape
{
    /**
     * @param array{Public?: PublicTlsEncryptionConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
