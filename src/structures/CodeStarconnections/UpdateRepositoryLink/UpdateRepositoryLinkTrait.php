<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\UpdateRepositoryLink;

trait UpdateRepositoryLinkTrait
{
    /**
     * @param UpdateRepositoryLinkRequest $args
     * @return UpdateRepositoryLinkResponse
     */
    public function updateRepositoryLink(UpdateRepositoryLinkRequest $args)
    {
        $result = parent::updateRepositoryLink($args->toArray());
        return new UpdateRepositoryLinkResponse($result->toArray());
    }
}
