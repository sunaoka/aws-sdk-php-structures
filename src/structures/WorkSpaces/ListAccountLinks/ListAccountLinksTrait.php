<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ListAccountLinks;

trait ListAccountLinksTrait
{
    /**
     * @param ListAccountLinksRequest $args
     * @return ListAccountLinksResponse
     */
    public function listAccountLinks(ListAccountLinksRequest $args)
    {
        $result = parent::listAccountLinks($args->toArray());
        return new ListAccountLinksResponse($result->toArray());
    }
}
