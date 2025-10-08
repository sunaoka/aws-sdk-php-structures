<?php

namespace Sunaoka\Aws\Structures\TranscribeService\UpdateMedicalVocabulary;

trait UpdateMedicalVocabularyTrait
{
    /**
     * @param UpdateMedicalVocabularyRequest $args
     * @return UpdateMedicalVocabularyResponse
     */
    public function updateMedicalVocabulary(UpdateMedicalVocabularyRequest $args)
    {
        $result = parent::updateMedicalVocabulary($args->toArray());
        return new UpdateMedicalVocabularyResponse($result->toArray());
    }
}
