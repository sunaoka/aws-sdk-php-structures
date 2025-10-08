<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEntityRecognizerSummaries;

trait ListEntityRecognizerSummariesTrait
{
    /**
     * @param ListEntityRecognizerSummariesRequest $args
     * @return ListEntityRecognizerSummariesResponse
     */
    public function listEntityRecognizerSummaries(ListEntityRecognizerSummariesRequest $args)
    {
        $result = parent::listEntityRecognizerSummaries($args->toArray());
        return new ListEntityRecognizerSummariesResponse($result->toArray());
    }
}
