<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DeleteSuggester;

trait DeleteSuggesterTrait
{
    /**
     * @param DeleteSuggesterRequest $args
     * @return DeleteSuggesterResponse
     */
    public function deleteSuggester(DeleteSuggesterRequest $args)
    {
        $result = parent::deleteSuggester($args->toArray());
        return new DeleteSuggesterResponse($result->toArray());
    }
}
