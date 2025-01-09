<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineName
 * @property list<Shapes\PipelineActivity> $pipelineActivities
 */
class UpdatePipelineRequest extends Request
{
    /**
     * @param array{
     *     pipelineName: string,
     *     pipelineActivities: list<Shapes\PipelineActivity>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
