<?php

namespace Sunaoka\Aws\Structures\CodeConnections\GetRepositoryLink;

trait GetRepositoryLinkTrait
{
    /**
     * @param GetRepositoryLinkRequest $args
     * @return GetRepositoryLinkResponse
     */
    public function getRepositoryLink(GetRepositoryLinkRequest $args)
    {
        $result = parent::getRepositoryLink($args->toArray());
        return new GetRepositoryLinkResponse($result->toArray());
    }
}
