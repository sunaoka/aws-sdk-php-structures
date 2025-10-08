<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\BatchDeleteCustomVocabularyItem;

trait BatchDeleteCustomVocabularyItemTrait
{
    /**
     * @param BatchDeleteCustomVocabularyItemRequest $args
     * @return BatchDeleteCustomVocabularyItemResponse
     */
    public function batchDeleteCustomVocabularyItem(BatchDeleteCustomVocabularyItemRequest $args)
    {
        $result = parent::batchDeleteCustomVocabularyItem($args->toArray());
        return new BatchDeleteCustomVocabularyItemResponse($result->toArray());
    }
}
