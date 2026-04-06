<?php

namespace Sunaoka\Aws\Structures\RTBFabric\AcceptLink;

trait AcceptLinkTrait
{
    /**
     * @param AcceptLinkRequest $args
     * @return AcceptLinkResponse
     */
    public function acceptLink(AcceptLinkRequest $args)
    {
        $result = parent::acceptLink($args->toArray());
        return new AcceptLinkResponse($result->toArray());
    }
}
