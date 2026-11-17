<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\CreateSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kmsKeyArn
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{kmsKeyArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
