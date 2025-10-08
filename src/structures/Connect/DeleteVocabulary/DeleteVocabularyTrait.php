<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteVocabulary;

trait DeleteVocabularyTrait
{
    /**
     * @param DeleteVocabularyRequest $args
     * @return DeleteVocabularyResponse
     */
    public function deleteVocabulary(DeleteVocabularyRequest $args)
    {
        $result = parent::deleteVocabulary($args->toArray());
        return new DeleteVocabularyResponse($result->toArray());
    }
}
