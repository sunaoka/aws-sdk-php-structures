<?php

namespace Sunaoka\Aws\Structures\OSIS\StartPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKeyArn
 */
class EncryptionAtRestOptions extends Shape
{
    /**
     * @param array{KmsKeyArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
