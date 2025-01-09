<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListIdMappingWorkflows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<min, 25> $maxResults
 * @property string $nextToken
 */
class ListIdMappingWorkflowsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<min, 25>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
