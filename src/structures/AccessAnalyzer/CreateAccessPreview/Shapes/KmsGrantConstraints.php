<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $encryptionContextEquals
 * @property array<string, string>|null $encryptionContextSubset
 */
class KmsGrantConstraints extends Shape
{
    /**
     * @param array{
     *     encryptionContextEquals?: array<string, string>|null,
     *     encryptionContextSubset?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
