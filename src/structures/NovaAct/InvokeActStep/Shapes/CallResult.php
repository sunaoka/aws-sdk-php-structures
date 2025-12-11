<?php

namespace Sunaoka\Aws\Structures\NovaAct\InvokeActStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $callId
 * @property list<CallResultContent> $content
 */
class CallResult extends Shape
{
    /**
     * @param array{
     *     callId?: string|null,
     *     content: list<CallResultContent>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
