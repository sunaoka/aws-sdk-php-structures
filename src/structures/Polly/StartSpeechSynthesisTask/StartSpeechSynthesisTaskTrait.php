<?php

namespace Sunaoka\Aws\Structures\Polly\StartSpeechSynthesisTask;

trait StartSpeechSynthesisTaskTrait
{
    /**
     * @param StartSpeechSynthesisTaskRequest $args
     * @return StartSpeechSynthesisTaskResponse
     */
    public function startSpeechSynthesisTask(StartSpeechSynthesisTaskRequest $args)
    {
        $result = parent::startSpeechSynthesisTask($args->toArray());
        return new StartSpeechSynthesisTaskResponse($result->toArray());
    }
}
