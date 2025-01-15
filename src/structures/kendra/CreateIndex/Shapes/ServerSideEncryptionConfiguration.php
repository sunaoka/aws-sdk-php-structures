<?php

namespace Sunaoka\Aws\Structures\kendra\CreateIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KmsKeyId
 */
class ServerSideEncryptionConfiguration extends Shape
{
    /**
     * @param array{KmsKeyId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
