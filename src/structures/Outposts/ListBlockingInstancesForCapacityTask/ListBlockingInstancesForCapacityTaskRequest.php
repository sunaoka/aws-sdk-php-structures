<?php

namespace Sunaoka\Aws\Structures\Outposts\ListBlockingInstancesForCapacityTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostIdentifier
 * @property string $CapacityTaskId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListBlockingInstancesForCapacityTaskRequest extends Request
{
    /**
     * @param array{
     *     OutpostIdentifier: string,
     *     CapacityTaskId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
