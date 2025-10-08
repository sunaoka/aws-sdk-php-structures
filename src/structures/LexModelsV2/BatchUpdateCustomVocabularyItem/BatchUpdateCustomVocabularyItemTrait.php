<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\BatchUpdateCustomVocabularyItem;

trait BatchUpdateCustomVocabularyItemTrait
{
    /**
     * @param BatchUpdateCustomVocabularyItemRequest $args
     * @return BatchUpdateCustomVocabularyItemResponse
     */
    public function batchUpdateCustomVocabularyItem(BatchUpdateCustomVocabularyItemRequest $args)
    {
        $result = parent::batchUpdateCustomVocabularyItem($args->toArray());
        return new BatchUpdateCustomVocabularyItemResponse($result->toArray());
    }
}
