<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $Value
 */
class SecureBlobAttributeValue extends Shape
{
    /**
     * @param array{Value?: string|resource|\Psr\Http\Message\StreamInterface|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
