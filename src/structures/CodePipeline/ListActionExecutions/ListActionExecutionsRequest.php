<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListActionExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineName
 * @property Shapes\ActionExecutionFilter $filter
 * @property int $maxResults
 * @property string $nextToken
 */
class ListActionExecutionsRequest extends Request
{
    /**
     * @param array{
     *     pipelineName: string,
     *     filter?: Shapes\ActionExecutionFilter,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
