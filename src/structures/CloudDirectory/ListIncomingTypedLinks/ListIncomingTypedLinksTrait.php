<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListIncomingTypedLinks;

trait ListIncomingTypedLinksTrait
{
    /**
     * @param ListIncomingTypedLinksRequest $args
     * @return ListIncomingTypedLinksResponse
     */
    public function listIncomingTypedLinks(ListIncomingTypedLinksRequest $args)
    {
        $result = parent::listIncomingTypedLinks($args->toArray());
        return new ListIncomingTypedLinksResponse($result->toArray());
    }
}
