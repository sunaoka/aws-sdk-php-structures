<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListChangeSets;

trait ListChangeSetsTrait
{
    /**
     * @param ListChangeSetsRequest $args
     * @return ListChangeSetsResponse
     */
    public function listChangeSets(ListChangeSetsRequest $args)
    {
        $result = parent::listChangeSets($args->toArray());
        return new ListChangeSetsResponse($result->toArray());
    }
}
