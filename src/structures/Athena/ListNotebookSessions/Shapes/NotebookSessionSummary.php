<?php

namespace Sunaoka\Aws\Structures\Athena\ListNotebookSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SessionId
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 */
class NotebookSessionSummary extends Shape
{
    /**
     * @param array{
     *     SessionId?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
