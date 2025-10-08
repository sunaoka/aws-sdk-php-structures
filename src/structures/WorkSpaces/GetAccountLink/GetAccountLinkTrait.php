<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\GetAccountLink;

trait GetAccountLinkTrait
{
    /**
     * @param GetAccountLinkRequest $args
     * @return GetAccountLinkResponse
     */
    public function getAccountLink(GetAccountLinkRequest $args)
    {
        $result = parent::getAccountLink($args->toArray());
        return new GetAccountLinkResponse($result->toArray());
    }
}
