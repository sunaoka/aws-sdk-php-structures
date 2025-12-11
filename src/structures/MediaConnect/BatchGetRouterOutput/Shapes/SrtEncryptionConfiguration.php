<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SecretsManagerEncryptionKeyConfiguration $EncryptionKey
 */
class SrtEncryptionConfiguration extends Shape
{
    /**
     * @param array{EncryptionKey: SecretsManagerEncryptionKeyConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
