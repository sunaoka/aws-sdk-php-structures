<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\ListWorkflowRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property string $WorkflowArn
 * @property string|null $WorkflowVersion
 */
class ListWorkflowRunsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     WorkflowArn: string,
     *     WorkflowVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
