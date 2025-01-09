<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Code
 * @property string $Message
 * @property string $ResourceName
 */
class MessageDetail extends Shape
{
    /**
     * @param array{
     *     Code: string,
     *     Message: string,
     *     ResourceName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
