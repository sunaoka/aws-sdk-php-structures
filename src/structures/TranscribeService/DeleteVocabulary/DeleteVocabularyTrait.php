<?php

namespace Sunaoka\Aws\Structures\TranscribeService\DeleteVocabulary;

trait DeleteVocabularyTrait
{
    /**
     * @param DeleteVocabularyRequest $args
     * @return void
     */
    public function deleteVocabulary(DeleteVocabularyRequest $args)
    {
        parent::deleteVocabulary($args->toArray());
    }
}
