<?php

namespace Sunaoka\Aws\Structures\Rekognition\RecognizeCelebrities;

trait RecognizeCelebritiesTrait
{
    /**
     * @param RecognizeCelebritiesRequest $args
     * @return RecognizeCelebritiesResponse
     */
    public function recognizeCelebrities(RecognizeCelebritiesRequest $args)
    {
        $result = parent::recognizeCelebrities($args->toArray());
        return new RecognizeCelebritiesResponse($result->toArray());
    }
}
