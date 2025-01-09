<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $truncated
 */
class HistoryEventExecutionDataDetails extends Shape
{
    /**
     * @param array{truncated?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
