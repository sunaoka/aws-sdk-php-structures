<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\StartVoiceToneAnalysisTask;

trait StartVoiceToneAnalysisTaskTrait
{
    /**
     * @param StartVoiceToneAnalysisTaskRequest $args
     * @return StartVoiceToneAnalysisTaskResponse
     */
    public function startVoiceToneAnalysisTask(StartVoiceToneAnalysisTaskRequest $args)
    {
        $result = parent::startVoiceToneAnalysisTask($args->toArray());
        return new StartVoiceToneAnalysisTaskResponse($result->toArray());
    }
}
