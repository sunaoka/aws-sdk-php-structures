<?php

namespace Sunaoka\Aws\Structures\Outposts\CreateSite;

trait CreateSiteTrait
{
    /**
     * @param CreateSiteRequest $args
     * @return CreateSiteResponse
     */
    public function createSite(CreateSiteRequest $args)
    {
        $result = parent::createSite($args->toArray());
        return new CreateSiteResponse($result->toArray());
    }
}
