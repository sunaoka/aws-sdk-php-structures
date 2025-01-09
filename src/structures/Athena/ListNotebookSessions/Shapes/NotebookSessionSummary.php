<?php

namespace Sunaoka\Aws\Structures\Athena\ListNotebookSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SessionId
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class NotebookSessionSummary extends Shape
{
    /**
     * @param array{
     *     SessionId?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
