<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetLink;

trait GetLinkTrait
{
    /**
     * @param GetLinkRequest $args
     * @return GetLinkResponse
     */
    public function getLink(GetLinkRequest $args)
    {
        $result = parent::getLink($args->toArray());
        return new GetLinkResponse($result->toArray());
    }
}
