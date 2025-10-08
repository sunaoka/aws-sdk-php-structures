<?php

namespace Sunaoka\Aws\Structures\TranscribeService\CreateVocabulary;

trait CreateVocabularyTrait
{
    /**
     * @param CreateVocabularyRequest $args
     * @return CreateVocabularyResponse
     */
    public function createVocabulary(CreateVocabularyRequest $args)
    {
        $result = parent::createVocabulary($args->toArray());
        return new CreateVocabularyResponse($result->toArray());
    }
}
