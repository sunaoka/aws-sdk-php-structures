<?php

namespace Sunaoka\Aws\Structures\OAM\ListAttachedLinks;

trait ListAttachedLinksTrait
{
    /**
     * @param ListAttachedLinksRequest $args
     * @return ListAttachedLinksResponse
     */
    public function listAttachedLinks(ListAttachedLinksRequest $args)
    {
        $result = parent::listAttachedLinks($args->toArray());
        return new ListAttachedLinksResponse($result->toArray());
    }
}
