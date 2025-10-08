<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\RecognizeUtterance;

trait RecognizeUtteranceTrait
{
    /**
     * @param RecognizeUtteranceRequest $args
     * @return RecognizeUtteranceResponse
     */
    public function recognizeUtterance(RecognizeUtteranceRequest $args)
    {
        $result = parent::recognizeUtterance($args->toArray());
        return new RecognizeUtteranceResponse($result->toArray());
    }
}
