<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchContent;

trait SearchContentTrait
{
    /**
     * @param SearchContentRequest $args
     * @return SearchContentResponse
     */
    public function searchContent(SearchContentRequest $args)
    {
        $result = parent::searchContent($args->toArray());
        return new SearchContentResponse($result->toArray());
    }
}
