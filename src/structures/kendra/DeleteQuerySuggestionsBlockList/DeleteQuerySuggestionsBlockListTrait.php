<?php

namespace Sunaoka\Aws\Structures\kendra\DeleteQuerySuggestionsBlockList;

trait DeleteQuerySuggestionsBlockListTrait
{
    /**
     * @param DeleteQuerySuggestionsBlockListRequest $args
     * @return void
     */
    public function deleteQuerySuggestionsBlockList(DeleteQuerySuggestionsBlockListRequest $args)
    {
        parent::deleteQuerySuggestionsBlockList($args->toArray());
    }
}
