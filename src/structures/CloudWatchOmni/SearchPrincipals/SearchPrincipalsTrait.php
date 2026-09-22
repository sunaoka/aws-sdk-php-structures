<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\SearchPrincipals;

trait SearchPrincipalsTrait
{
    /**
     * @param SearchPrincipalsRequest $args
     * @return SearchPrincipalsResponse
     */
    public function searchPrincipals(SearchPrincipalsRequest $args)
    {
        $result = parent::searchPrincipals($args->toArray());
        return new SearchPrincipalsResponse($result->toArray());
    }
}
