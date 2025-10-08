<?php

namespace Sunaoka\Aws\Structures\Polly\ListSpeechSynthesisTasks;

trait ListSpeechSynthesisTasksTrait
{
    /**
     * @param ListSpeechSynthesisTasksRequest $args
     * @return ListSpeechSynthesisTasksResponse
     */
    public function listSpeechSynthesisTasks(ListSpeechSynthesisTasksRequest $args)
    {
        $result = parent::listSpeechSynthesisTasks($args->toArray());
        return new ListSpeechSynthesisTasksResponse($result->toArray());
    }
}
