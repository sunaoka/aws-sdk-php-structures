<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListMatchingWorkflows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<min, 25>|null $maxResults
 * @property string|null $nextToken
 */
class ListMatchingWorkflowsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<min, 25>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
