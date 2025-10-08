<?php

namespace Sunaoka\Aws\Structures\Connect\SearchVocabularies;

trait SearchVocabulariesTrait
{
    /**
     * @param SearchVocabulariesRequest $args
     * @return SearchVocabulariesResponse
     */
    public function searchVocabularies(SearchVocabulariesRequest $args)
    {
        $result = parent::searchVocabularies($args->toArray());
        return new SearchVocabulariesResponse($result->toArray());
    }
}
