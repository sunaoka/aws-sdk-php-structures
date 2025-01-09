<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWorkflowExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property string $imageBuildVersionArn
 */
class ListWorkflowExecutionsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     imageBuildVersionArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
