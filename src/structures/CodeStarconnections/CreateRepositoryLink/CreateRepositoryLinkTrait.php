<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\CreateRepositoryLink;

trait CreateRepositoryLinkTrait
{
    /**
     * @param CreateRepositoryLinkRequest $args
     * @return CreateRepositoryLinkResponse
     */
    public function createRepositoryLink(CreateRepositoryLinkRequest $args)
    {
        $result = parent::createRepositoryLink($args->toArray());
        return new CreateRepositoryLinkResponse($result->toArray());
    }
}
