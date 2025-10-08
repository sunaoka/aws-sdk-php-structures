<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateEntityRecognizer;

trait CreateEntityRecognizerTrait
{
    /**
     * @param CreateEntityRecognizerRequest $args
     * @return CreateEntityRecognizerResponse
     */
    public function createEntityRecognizer(CreateEntityRecognizerRequest $args)
    {
        $result = parent::createEntityRecognizer($args->toArray());
        return new CreateEntityRecognizerResponse($result->toArray());
    }
}
