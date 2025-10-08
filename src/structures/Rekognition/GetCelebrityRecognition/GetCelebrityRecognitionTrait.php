<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetCelebrityRecognition;

trait GetCelebrityRecognitionTrait
{
    /**
     * @param GetCelebrityRecognitionRequest $args
     * @return GetCelebrityRecognitionResponse
     */
    public function getCelebrityRecognition(GetCelebrityRecognitionRequest $args)
    {
        $result = parent::getCelebrityRecognition($args->toArray());
        return new GetCelebrityRecognitionResponse($result->toArray());
    }
}
