<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetInboundExternalLink;

trait GetInboundExternalLinkTrait
{
    /**
     * @param GetInboundExternalLinkRequest $args
     * @return GetInboundExternalLinkResponse
     */
    public function getInboundExternalLink(GetInboundExternalLinkRequest $args)
    {
        $result = parent::getInboundExternalLink($args->toArray());
        return new GetInboundExternalLinkResponse($result->toArray());
    }
}
