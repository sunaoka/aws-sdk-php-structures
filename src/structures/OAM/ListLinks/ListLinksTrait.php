<?php

namespace Sunaoka\Aws\Structures\OAM\ListLinks;

trait ListLinksTrait
{
    /**
     * @param ListLinksRequest $args
     * @return ListLinksResponse
     */
    public function listLinks(ListLinksRequest $args)
    {
        $result = parent::listLinks($args->toArray());
        return new ListLinksResponse($result->toArray());
    }
}
