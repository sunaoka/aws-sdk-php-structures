<?php

namespace Sunaoka\Aws\Structures\TranscribeService\UpdateVocabulary;

trait UpdateVocabularyTrait
{
    /**
     * @param UpdateVocabularyRequest $args
     * @return UpdateVocabularyResponse
     */
    public function updateVocabulary(UpdateVocabularyRequest $args)
    {
        $result = parent::updateVocabulary($args->toArray());
        return new UpdateVocabularyResponse($result->toArray());
    }
}
