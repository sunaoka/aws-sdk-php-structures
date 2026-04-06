<?php

namespace Sunaoka\Aws\Structures\drs\ListLaunchActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\LaunchActionsRequestFilters|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string $resourceId
 */
class ListLaunchActionsRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\LaunchActionsRequestFilters|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     resourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
