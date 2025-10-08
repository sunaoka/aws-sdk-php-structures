<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListVocabularyFilters;

trait ListVocabularyFiltersTrait
{
    /**
     * @param ListVocabularyFiltersRequest $args
     * @return ListVocabularyFiltersResponse
     */
    public function listVocabularyFilters(ListVocabularyFiltersRequest $args)
    {
        $result = parent::listVocabularyFilters($args->toArray());
        return new ListVocabularyFiltersResponse($result->toArray());
    }
}
