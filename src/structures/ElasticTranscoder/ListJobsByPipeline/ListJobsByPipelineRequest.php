<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListJobsByPipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PipelineId
 * @property string $Ascending
 * @property string $PageToken
 */
class ListJobsByPipelineRequest extends Request
{
    /**
     * @param array{
     *     PipelineId: string,
     *     Ascending?: string,
     *     PageToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
