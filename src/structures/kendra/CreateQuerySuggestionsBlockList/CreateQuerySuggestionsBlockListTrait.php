<?php

namespace Sunaoka\Aws\Structures\kendra\CreateQuerySuggestionsBlockList;

trait CreateQuerySuggestionsBlockListTrait
{
    /**
     * @param CreateQuerySuggestionsBlockListRequest $args
     * @return CreateQuerySuggestionsBlockListResponse
     */
    public function createQuerySuggestionsBlockList(CreateQuerySuggestionsBlockListRequest $args)
    {
        $result = parent::createQuerySuggestionsBlockList($args->toArray());
        return new CreateQuerySuggestionsBlockListResponse($result->toArray());
    }
}
