<?php

namespace Sunaoka\Aws\Structures\Iot\ListCommands\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $commandArn
 * @property string $commandId
 * @property string $displayName
 * @property bool $deprecated
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property bool $pendingDeletion
 */
class CommandSummary extends Shape
{
    /**
     * @param array{
     *     commandArn?: string,
     *     commandId?: string,
     *     displayName?: string,
     *     deprecated?: bool,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     pendingDeletion?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
