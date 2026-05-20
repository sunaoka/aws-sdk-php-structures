<?php

namespace Sunaoka\Aws\Structures\Kms\ListRetirableGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $EncryptionContextSubset
 * @property array<string, string>|null $EncryptionContextEquals
 * @property string|null $SourceArn
 */
class GrantConstraints extends Shape
{
    /**
     * @param array{
     *     EncryptionContextSubset?: array<string, string>|null,
     *     EncryptionContextEquals?: array<string, string>|null,
     *     SourceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
