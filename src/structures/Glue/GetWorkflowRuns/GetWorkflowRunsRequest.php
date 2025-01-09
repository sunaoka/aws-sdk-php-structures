<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflowRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property bool $IncludeGraph
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 */
class GetWorkflowRunsRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     IncludeGraph?: bool,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
