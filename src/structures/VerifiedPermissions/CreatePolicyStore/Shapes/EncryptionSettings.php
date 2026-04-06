<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreatePolicyStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KmsEncryptionSettings|null $kmsEncryptionSettings
 * @property Unit|null $default
 */
class EncryptionSettings extends Shape
{
    /**
     * @param array{
     *     kmsEncryptionSettings?: KmsEncryptionSettings|null,
     *     default?: Unit|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
