<?php

namespace Sunaoka\Aws\Structures\drs\ListLaunchActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\LaunchActionsRequestFilters $filters
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 * @property string $resourceId
 */
class ListLaunchActionsRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\LaunchActionsRequestFilters,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string,
     *     resourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
