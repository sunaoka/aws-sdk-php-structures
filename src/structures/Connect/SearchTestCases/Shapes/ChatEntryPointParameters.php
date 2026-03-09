<?php

namespace Sunaoka\Aws\Structures\Connect\SearchTestCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FlowId
 */
class ChatEntryPointParameters extends Shape
{
    /**
     * @param array{FlowId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
