<?php

namespace Sunaoka\Aws\Structures\Sqs\StartMessageMoveTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceArn
 * @property string|null $DestinationArn
 * @property int|null $MaxNumberOfMessagesPerSecond
 */
class StartMessageMoveTaskRequest extends Request
{
    /**
     * @param array{
     *     SourceArn: string,
     *     DestinationArn?: string|null,
     *     MaxNumberOfMessagesPerSecond?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
