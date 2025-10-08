<?php

namespace Sunaoka\Aws\Structures\TranscribeService\UpdateVocabularyFilter;

trait UpdateVocabularyFilterTrait
{
    /**
     * @param UpdateVocabularyFilterRequest $args
     * @return UpdateVocabularyFilterResponse
     */
    public function updateVocabularyFilter(UpdateVocabularyFilterRequest $args)
    {
        $result = parent::updateVocabularyFilter($args->toArray());
        return new UpdateVocabularyFilterResponse($result->toArray());
    }
}
