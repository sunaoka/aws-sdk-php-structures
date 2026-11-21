<?php

namespace Sunaoka\Aws\Structures\Textract\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKeyId
 * @property array<string, string>|null $KmsEncryptionContext
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     KmsKeyId: string,
     *     KmsEncryptionContext?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
