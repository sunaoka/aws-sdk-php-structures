<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListPipelineExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineName
 * @property int<1, 100> $maxResults
 * @property Shapes\PipelineExecutionFilter $filter
 * @property string $nextToken
 */
class ListPipelineExecutionsRequest extends Request
{
    /**
     * @param array{
     *     pipelineName: string,
     *     maxResults?: int<1, 100>,
     *     filter?: Shapes\PipelineExecutionFilter,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
