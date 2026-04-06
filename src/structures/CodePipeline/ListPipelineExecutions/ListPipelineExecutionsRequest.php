<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListPipelineExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineName
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListPipelineExecutionsRequest extends Request
{
    /**
     * @param array{
     *     pipelineName: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
