<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWorkflowBuildVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowVersionArn
 * @property int<1, 25> $maxResults
 * @property string $nextToken
 */
class ListWorkflowBuildVersionsRequest extends Request
{
    /**
     * @param array{
     *     workflowVersionArn: string,
     *     maxResults?: int<1, 25>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
