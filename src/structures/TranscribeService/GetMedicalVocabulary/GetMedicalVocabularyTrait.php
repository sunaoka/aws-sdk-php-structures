<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetMedicalVocabulary;

trait GetMedicalVocabularyTrait
{
    /**
     * @param GetMedicalVocabularyRequest $args
     * @return GetMedicalVocabularyResponse
     */
    public function getMedicalVocabulary(GetMedicalVocabularyRequest $args)
    {
        $result = parent::getMedicalVocabulary($args->toArray());
        return new GetMedicalVocabularyResponse($result->toArray());
    }
}
