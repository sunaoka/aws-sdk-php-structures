<?php

namespace Sunaoka\Aws\Structures\Sqs\ListMessageMoveTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceArn
 * @property int $MaxResults
 */
class ListMessageMoveTasksRequest extends Request
{
    /**
     * @param array{
     *     SourceArn: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
