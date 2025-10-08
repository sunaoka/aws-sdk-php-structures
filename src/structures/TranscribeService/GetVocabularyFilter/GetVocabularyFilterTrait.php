<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetVocabularyFilter;

trait GetVocabularyFilterTrait
{
    /**
     * @param GetVocabularyFilterRequest $args
     * @return GetVocabularyFilterResponse
     */
    public function getVocabularyFilter(GetVocabularyFilterRequest $args)
    {
        $result = parent::getVocabularyFilter($args->toArray());
        return new GetVocabularyFilterResponse($result->toArray());
    }
}
