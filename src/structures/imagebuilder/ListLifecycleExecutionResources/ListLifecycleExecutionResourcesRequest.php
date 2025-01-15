<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListLifecycleExecutionResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $lifecycleExecutionId
 * @property string|null $parentResourceId
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 */
class ListLifecycleExecutionResourcesRequest extends Request
{
    /**
     * @param array{
     *     lifecycleExecutionId: string,
     *     parentResourceId?: string|null,
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
