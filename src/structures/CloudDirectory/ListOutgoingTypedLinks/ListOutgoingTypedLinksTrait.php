<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListOutgoingTypedLinks;

trait ListOutgoingTypedLinksTrait
{
    /**
     * @param ListOutgoingTypedLinksRequest $args
     * @return ListOutgoingTypedLinksResponse
     */
    public function listOutgoingTypedLinks(ListOutgoingTypedLinksRequest $args)
    {
        $result = parent::listOutgoingTypedLinks($args->toArray());
        return new ListOutgoingTypedLinksResponse($result->toArray());
    }
}
