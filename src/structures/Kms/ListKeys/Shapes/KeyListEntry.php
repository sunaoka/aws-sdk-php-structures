<?php

namespace Sunaoka\Aws\Structures\Kms\ListKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyId
 * @property string $KeyArn
 */
class KeyListEntry extends Shape
{
    /**
     * @param array{
     *     KeyId?: string,
     *     KeyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
