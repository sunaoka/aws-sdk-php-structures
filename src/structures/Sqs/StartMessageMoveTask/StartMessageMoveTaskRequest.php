<?php

namespace Sunaoka\Aws\Structures\Sqs\StartMessageMoveTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceArn
 * @property string $DestinationArn
 * @property int $MaxNumberOfMessagesPerSecond
 */
class StartMessageMoveTaskRequest extends Request
{
    /**
     * @param array{
     *     SourceArn: string,
     *     DestinationArn?: string,
     *     MaxNumberOfMessagesPerSecond?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
