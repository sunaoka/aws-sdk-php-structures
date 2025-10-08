<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateQuerySuggestionsBlockList;

trait UpdateQuerySuggestionsBlockListTrait
{
    /**
     * @param UpdateQuerySuggestionsBlockListRequest $args
     * @return void
     */
    public function updateQuerySuggestionsBlockList(UpdateQuerySuggestionsBlockListRequest $args)
    {
        parent::updateQuerySuggestionsBlockList($args->toArray());
    }
}
