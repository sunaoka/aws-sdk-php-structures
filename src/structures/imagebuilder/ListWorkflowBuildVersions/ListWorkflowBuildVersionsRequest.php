<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWorkflowBuildVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowVersionArn
 * @property int $maxResults
 * @property string $nextToken
 */
class ListWorkflowBuildVersionsRequest extends Request
{
    /**
     * @param array{
     *     workflowVersionArn: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
