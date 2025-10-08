<?php

namespace Sunaoka\Aws\Structures\TranscribeService\DeleteVocabularyFilter;

trait DeleteVocabularyFilterTrait
{
    /**
     * @param DeleteVocabularyFilterRequest $args
     * @return void
     */
    public function deleteVocabularyFilter(DeleteVocabularyFilterRequest $args)
    {
        parent::deleteVocabularyFilter($args->toArray());
    }
}
