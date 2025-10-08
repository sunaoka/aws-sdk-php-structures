<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListMedicalVocabularies;

trait ListMedicalVocabulariesTrait
{
    /**
     * @param ListMedicalVocabulariesRequest $args
     * @return ListMedicalVocabulariesResponse
     */
    public function listMedicalVocabularies(ListMedicalVocabulariesRequest $args)
    {
        $result = parent::listMedicalVocabularies($args->toArray());
        return new ListMedicalVocabulariesResponse($result->toArray());
    }
}
