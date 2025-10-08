<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetVocabulary;

trait GetVocabularyTrait
{
    /**
     * @param GetVocabularyRequest $args
     * @return GetVocabularyResponse
     */
    public function getVocabulary(GetVocabularyRequest $args)
    {
        $result = parent::getVocabulary($args->toArray());
        return new GetVocabularyResponse($result->toArray());
    }
}
