<?php

namespace Sunaoka\Aws\Structures\Comprehend\DeleteEntityRecognizer;

trait DeleteEntityRecognizerTrait
{
    /**
     * @param DeleteEntityRecognizerRequest $args
     * @return DeleteEntityRecognizerResponse
     */
    public function deleteEntityRecognizer(DeleteEntityRecognizerRequest $args)
    {
        $result = parent::deleteEntityRecognizer($args->toArray());
        return new DeleteEntityRecognizerResponse($result->toArray());
    }
}
