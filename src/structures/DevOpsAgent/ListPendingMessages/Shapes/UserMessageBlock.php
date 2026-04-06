<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListPendingMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 * @property Document|null $toolResult
 */
class UserMessageBlock extends Shape
{
    /**
     * @param array{
     *     text?: string|null,
     *     toolResult?: Document|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
