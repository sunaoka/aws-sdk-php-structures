<?php

namespace Sunaoka\Aws\Structures\Outposts\ListBlockingInstancesForCapacityTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostIdentifier
 * @property string $CapacityTaskId
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListBlockingInstancesForCapacityTaskRequest extends Request
{
    /**
     * @param array{
     *     OutpostIdentifier: string,
     *     CapacityTaskId: string,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
