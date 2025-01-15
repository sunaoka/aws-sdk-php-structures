<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWorkflowBuildVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowVersionArn
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 */
class ListWorkflowBuildVersionsRequest extends Request
{
    /**
     * @param array{
     *     workflowVersionArn: string,
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
