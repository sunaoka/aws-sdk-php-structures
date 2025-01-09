<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineName
 * @property list<Shapes\PipelineActivity> $pipelineActivities
 * @property list<Shapes\Tag> $tags
 */
class CreatePipelineRequest extends Request
{
    /**
     * @param array{
     *     pipelineName: string,
     *     pipelineActivities: list<Shapes\PipelineActivity>,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
