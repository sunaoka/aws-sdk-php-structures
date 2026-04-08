<?php

namespace Sunaoka\Aws\Structures\drs\ListLaunchActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceId
 * @property Shapes\LaunchActionsRequestFilters|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListLaunchActionsRequest extends Request
{
    /**
     * @param array{
     *     resourceId: string,
     *     filters?: Shapes\LaunchActionsRequestFilters|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
