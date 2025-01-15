<?php

namespace Sunaoka\Aws\Structures\Kms\ListKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KeyId
 * @property string|null $KeyArn
 */
class KeyListEntry extends Shape
{
    /**
     * @param array{
     *     KeyId?: string|null,
     *     KeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
