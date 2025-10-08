<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\RunPipelineActivity;

trait RunPipelineActivityTrait
{
    /**
     * @param RunPipelineActivityRequest $args
     * @return RunPipelineActivityResponse
     */
    public function runPipelineActivity(RunPipelineActivityRequest $args)
    {
        $result = parent::runPipelineActivity($args->toArray());
        return new RunPipelineActivityResponse($result->toArray());
    }
}
