<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\DeleteRepositoryLink;

trait DeleteRepositoryLinkTrait
{
    /**
     * @param DeleteRepositoryLinkRequest $args
     * @return DeleteRepositoryLinkResponse
     */
    public function deleteRepositoryLink(DeleteRepositoryLinkRequest $args)
    {
        $result = parent::deleteRepositoryLink($args->toArray());
        return new DeleteRepositoryLinkResponse($result->toArray());
    }
}
