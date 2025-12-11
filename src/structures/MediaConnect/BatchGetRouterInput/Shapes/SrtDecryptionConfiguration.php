<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SecretsManagerEncryptionKeyConfiguration $EncryptionKey
 */
class SrtDecryptionConfiguration extends Shape
{
    /**
     * @param array{EncryptionKey: SecretsManagerEncryptionKeyConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
