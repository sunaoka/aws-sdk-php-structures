<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteCustomVocabulary;

trait DeleteCustomVocabularyTrait
{
    /**
     * @param DeleteCustomVocabularyRequest $args
     * @return DeleteCustomVocabularyResponse
     */
    public function deleteCustomVocabulary(DeleteCustomVocabularyRequest $args)
    {
        $result = parent::deleteCustomVocabulary($args->toArray());
        return new DeleteCustomVocabularyResponse($result->toArray());
    }
}
