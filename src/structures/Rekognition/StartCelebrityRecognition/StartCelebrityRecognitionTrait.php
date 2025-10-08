<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartCelebrityRecognition;

trait StartCelebrityRecognitionTrait
{
    /**
     * @param StartCelebrityRecognitionRequest $args
     * @return StartCelebrityRecognitionResponse
     */
    public function startCelebrityRecognition(StartCelebrityRecognitionRequest $args)
    {
        $result = parent::startCelebrityRecognition($args->toArray());
        return new StartCelebrityRecognitionResponse($result->toArray());
    }
}
