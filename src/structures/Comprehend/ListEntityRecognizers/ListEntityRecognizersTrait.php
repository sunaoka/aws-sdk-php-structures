<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEntityRecognizers;

trait ListEntityRecognizersTrait
{
    /**
     * @param ListEntityRecognizersRequest $args
     * @return ListEntityRecognizersResponse
     */
    public function listEntityRecognizers(ListEntityRecognizersRequest $args)
    {
        $result = parent::listEntityRecognizers($args->toArray());
        return new ListEntityRecognizersResponse($result->toArray());
    }
}
