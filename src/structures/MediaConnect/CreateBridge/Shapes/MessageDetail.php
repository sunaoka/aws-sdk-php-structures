<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Code
 * @property string $Message
 * @property string|null $ResourceName
 */
class MessageDetail extends Shape
{
    /**
     * @param array{
     *     Code: string,
     *     Message: string,
     *     ResourceName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
