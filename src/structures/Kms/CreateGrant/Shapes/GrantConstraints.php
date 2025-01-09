<?php

namespace Sunaoka\Aws\Structures\Kms\CreateGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $EncryptionContextSubset
 * @property array<string, string> $EncryptionContextEquals
 */
class GrantConstraints extends Shape
{
    /**
     * @param array{
     *     EncryptionContextSubset?: array<string, string>,
     *     EncryptionContextEquals?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
