<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflowRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property bool|null $IncludeGraph
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class GetWorkflowRunsRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     IncludeGraph?: bool|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
