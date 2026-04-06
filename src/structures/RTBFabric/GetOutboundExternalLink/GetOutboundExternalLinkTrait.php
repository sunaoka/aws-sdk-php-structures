<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetOutboundExternalLink;

trait GetOutboundExternalLinkTrait
{
    /**
     * @param GetOutboundExternalLinkRequest $args
     * @return GetOutboundExternalLinkResponse
     */
    public function getOutboundExternalLink(GetOutboundExternalLinkRequest $args)
    {
        $result = parent::getOutboundExternalLink($args->toArray());
        return new GetOutboundExternalLinkResponse($result->toArray());
    }
}
