<?php

namespace Sunaoka\Aws\Structures\Outposts\ListBlockingInstancesForCapacityTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostIdentifier
 * @property string $CapacityTaskId
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class ListBlockingInstancesForCapacityTaskRequest extends Request
{
    /**
     * @param array{
     *     OutpostIdentifier: string,
     *     CapacityTaskId: string,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
