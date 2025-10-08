<?php

namespace Sunaoka\Aws\Structures\Outposts\GetSite;

trait GetSiteTrait
{
    /**
     * @param GetSiteRequest $args
     * @return GetSiteResponse
     */
    public function getSite(GetSiteRequest $args)
    {
        $result = parent::getSite($args->toArray());
        return new GetSiteResponse($result->toArray());
    }
}
