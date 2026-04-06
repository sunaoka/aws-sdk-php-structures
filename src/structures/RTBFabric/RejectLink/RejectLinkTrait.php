<?php

namespace Sunaoka\Aws\Structures\RTBFabric\RejectLink;

trait RejectLinkTrait
{
    /**
     * @param RejectLinkRequest $args
     * @return RejectLinkResponse
     */
    public function rejectLink(RejectLinkRequest $args)
    {
        $result = parent::rejectLink($args->toArray());
        return new RejectLinkResponse($result->toArray());
    }
}
