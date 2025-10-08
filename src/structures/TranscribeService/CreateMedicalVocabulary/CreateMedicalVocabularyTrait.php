<?php

namespace Sunaoka\Aws\Structures\TranscribeService\CreateMedicalVocabulary;

trait CreateMedicalVocabularyTrait
{
    /**
     * @param CreateMedicalVocabularyRequest $args
     * @return CreateMedicalVocabularyResponse
     */
    public function createMedicalVocabulary(CreateMedicalVocabularyRequest $args)
    {
        $result = parent::createMedicalVocabulary($args->toArray());
        return new CreateMedicalVocabularyResponse($result->toArray());
    }
}
