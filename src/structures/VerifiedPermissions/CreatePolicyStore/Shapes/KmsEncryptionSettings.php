<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreatePolicyStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property array<string, string>|null $encryptionContext
 */
class KmsEncryptionSettings extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     encryptionContext?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
