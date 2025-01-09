<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflowRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property bool $IncludeGraph
 * @property string $NextToken
 * @property int $MaxResults
 */
class GetWorkflowRunsRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     IncludeGraph?: bool,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
