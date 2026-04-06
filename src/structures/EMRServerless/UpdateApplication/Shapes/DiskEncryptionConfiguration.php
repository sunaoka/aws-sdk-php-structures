<?php

namespace Sunaoka\Aws\Structures\EMRServerless\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $encryptionContext
 * @property string|null $encryptionKeyArn
 */
class DiskEncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     encryptionContext?: array<string, string>|null,
     *     encryptionKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
