<?php

namespace Sunaoka\Aws\Structures\Sqs\ListMessageMoveTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceArn
 * @property int|null $MaxResults
 */
class ListMessageMoveTasksRequest extends Request
{
    /**
     * @param array{
     *     SourceArn: string,
     *     MaxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
