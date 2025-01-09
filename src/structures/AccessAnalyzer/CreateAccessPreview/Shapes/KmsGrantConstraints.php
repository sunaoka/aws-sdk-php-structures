<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $encryptionContextEquals
 * @property array<string, string> $encryptionContextSubset
 */
class KmsGrantConstraints extends Shape
{
    /**
     * @param array{
     *     encryptionContextEquals?: array<string, string>,
     *     encryptionContextSubset?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
