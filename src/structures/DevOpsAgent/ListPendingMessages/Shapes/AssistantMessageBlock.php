<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListPendingMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 * @property Document|null $toolUse
 */
class AssistantMessageBlock extends Shape
{
    /**
     * @param array{
     *     text?: string|null,
     *     toolUse?: Document|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
