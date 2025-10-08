<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListCustomVocabularyItems;

trait ListCustomVocabularyItemsTrait
{
    /**
     * @param ListCustomVocabularyItemsRequest $args
     * @return ListCustomVocabularyItemsResponse
     */
    public function listCustomVocabularyItems(ListCustomVocabularyItemsRequest $args)
    {
        $result = parent::listCustomVocabularyItems($args->toArray());
        return new ListCustomVocabularyItemsResponse($result->toArray());
    }
}
