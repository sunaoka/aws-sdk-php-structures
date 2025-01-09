<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyId
 */
class SSEKMSEncryption extends Shape
{
    /**
     * @param array{KeyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
