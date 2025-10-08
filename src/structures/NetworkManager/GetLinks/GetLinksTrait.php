<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetLinks;

trait GetLinksTrait
{
    /**
     * @param GetLinksRequest $args
     * @return GetLinksResponse
     */
    public function getLinks(GetLinksRequest $args)
    {
        $result = parent::getLinks($args->toArray());
        return new GetLinksResponse($result->toArray());
    }
}
