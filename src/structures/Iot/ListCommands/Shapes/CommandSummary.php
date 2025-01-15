<?php

namespace Sunaoka\Aws\Structures\Iot\ListCommands\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $commandArn
 * @property string|null $commandId
 * @property string|null $displayName
 * @property bool|null $deprecated
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property bool|null $pendingDeletion
 */
class CommandSummary extends Shape
{
    /**
     * @param array{
     *     commandArn?: string|null,
     *     commandId?: string|null,
     *     displayName?: string|null,
     *     deprecated?: bool|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     pendingDeletion?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
