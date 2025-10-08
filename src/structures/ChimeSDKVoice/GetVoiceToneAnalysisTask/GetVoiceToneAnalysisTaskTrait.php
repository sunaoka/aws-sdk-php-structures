<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceToneAnalysisTask;

trait GetVoiceToneAnalysisTaskTrait
{
    /**
     * @param GetVoiceToneAnalysisTaskRequest $args
     * @return GetVoiceToneAnalysisTaskResponse
     */
    public function getVoiceToneAnalysisTask(GetVoiceToneAnalysisTaskRequest $args)
    {
        $result = parent::getVoiceToneAnalysisTask($args->toArray());
        return new GetVoiceToneAnalysisTaskResponse($result->toArray());
    }
}
