<?php

namespace Sunaoka\Aws\Structures\TranscribeService\DeleteMedicalVocabulary;

trait DeleteMedicalVocabularyTrait
{
    /**
     * @param DeleteMedicalVocabularyRequest $args
     * @return void
     */
    public function deleteMedicalVocabulary(DeleteMedicalVocabularyRequest $args)
    {
        parent::deleteMedicalVocabulary($args->toArray());
    }
}
