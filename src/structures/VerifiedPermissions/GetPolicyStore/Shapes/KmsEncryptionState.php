<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetPolicyStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property array<string, string> $encryptionContext
 */
class KmsEncryptionState extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     encryptionContext: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
