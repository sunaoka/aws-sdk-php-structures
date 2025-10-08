<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\BatchCreateCustomVocabularyItem;

trait BatchCreateCustomVocabularyItemTrait
{
    /**
     * @param BatchCreateCustomVocabularyItemRequest $args
     * @return BatchCreateCustomVocabularyItemResponse
     */
    public function batchCreateCustomVocabularyItem(BatchCreateCustomVocabularyItemRequest $args)
    {
        $result = parent::batchCreateCustomVocabularyItem($args->toArray());
        return new BatchCreateCustomVocabularyItemResponse($result->toArray());
    }
}
