<?php

namespace Sunaoka\Aws\Structures\Connect\SearchQuickConnects;

trait SearchQuickConnectsTrait
{
    /**
     * @param SearchQuickConnectsRequest $args
     * @return SearchQuickConnectsResponse
     */
    public function searchQuickConnects(SearchQuickConnectsRequest $args)
    {
        $result = parent::searchQuickConnects($args->toArray());
        return new SearchQuickConnectsResponse($result->toArray());
    }
}
