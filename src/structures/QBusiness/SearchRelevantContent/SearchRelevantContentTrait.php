<?php

namespace Sunaoka\Aws\Structures\QBusiness\SearchRelevantContent;

trait SearchRelevantContentTrait
{
    /**
     * @param SearchRelevantContentRequest $args
     * @return SearchRelevantContentResponse
     */
    public function searchRelevantContent(SearchRelevantContentRequest $args)
    {
        $result = parent::searchRelevantContent($args->toArray());
        return new SearchRelevantContentResponse($result->toArray());
    }
}
