<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListActionExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineName
 * @property Shapes\ActionExecutionFilter|null $filter
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListActionExecutionsRequest extends Request
{
    /**
     * @param array{
     *     pipelineName: string,
     *     filter?: Shapes\ActionExecutionFilter|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
