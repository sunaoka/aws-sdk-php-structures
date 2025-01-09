<?php

namespace Sunaoka\Aws\Structures\kendra\CreateIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKeyId
 */
class ServerSideEncryptionConfiguration extends Shape
{
    /**
     * @param array{KmsKeyId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
