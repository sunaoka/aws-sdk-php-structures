<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetPolicyStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KmsEncryptionState|null $kmsEncryptionState
 * @property Unit|null $default
 */
class EncryptionState extends Shape
{
    /**
     * @param array{
     *     kmsEncryptionState?: KmsEncryptionState|null,
     *     default?: Unit|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
