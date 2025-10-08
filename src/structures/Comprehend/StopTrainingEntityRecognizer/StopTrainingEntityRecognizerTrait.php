<?php

namespace Sunaoka\Aws\Structures\Comprehend\StopTrainingEntityRecognizer;

trait StopTrainingEntityRecognizerTrait
{
    /**
     * @param StopTrainingEntityRecognizerRequest $args
     * @return StopTrainingEntityRecognizerResponse
     */
    public function stopTrainingEntityRecognizer(StopTrainingEntityRecognizerRequest $args)
    {
        $result = parent::stopTrainingEntityRecognizer($args->toArray());
        return new StopTrainingEntityRecognizerResponse($result->toArray());
    }
}
