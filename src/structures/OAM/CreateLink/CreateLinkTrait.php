<?php

namespace Sunaoka\Aws\Structures\OAM\CreateLink;

trait CreateLinkTrait
{
    /**
     * @param CreateLinkRequest $args
     * @return CreateLinkResponse
     */
    public function createLink(CreateLinkRequest $args)
    {
        $result = parent::createLink($args->toArray());
        return new CreateLinkResponse($result->toArray());
    }
}
