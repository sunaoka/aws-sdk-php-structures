<?php

namespace Sunaoka\Aws\Structures\TranscribeService\CreateVocabularyFilter;

trait CreateVocabularyFilterTrait
{
    /**
     * @param CreateVocabularyFilterRequest $args
     * @return CreateVocabularyFilterResponse
     */
    public function createVocabularyFilter(CreateVocabularyFilterRequest $args)
    {
        $result = parent::createVocabularyFilter($args->toArray());
        return new CreateVocabularyFilterResponse($result->toArray());
    }
}
