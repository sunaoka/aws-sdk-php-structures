<?php

namespace Sunaoka\Aws\Structures\CodeConnections\ListRepositoryLinks;

trait ListRepositoryLinksTrait
{
    /**
     * @param ListRepositoryLinksRequest $args
     * @return ListRepositoryLinksResponse
     */
    public function listRepositoryLinks(ListRepositoryLinksRequest $args)
    {
        $result = parent::listRepositoryLinks($args->toArray());
        return new ListRepositoryLinksResponse($result->toArray());
    }
}
