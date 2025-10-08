<?php

namespace Sunaoka\Aws\Structures\Polly\GetSpeechSynthesisTask;

trait GetSpeechSynthesisTaskTrait
{
    /**
     * @param GetSpeechSynthesisTaskRequest $args
     * @return GetSpeechSynthesisTaskResponse
     */
    public function getSpeechSynthesisTask(GetSpeechSynthesisTaskRequest $args)
    {
        $result = parent::getSpeechSynthesisTask($args->toArray());
        return new GetSpeechSynthesisTaskResponse($result->toArray());
    }
}
