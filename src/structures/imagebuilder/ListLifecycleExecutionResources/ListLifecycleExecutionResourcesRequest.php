<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListLifecycleExecutionResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $lifecycleExecutionId
 * @property string $parentResourceId
 * @property int $maxResults
 * @property string $nextToken
 */
class ListLifecycleExecutionResourcesRequest extends Request
{
    /**
     * @param array{
     *     lifecycleExecutionId: string,
     *     parentResourceId?: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
