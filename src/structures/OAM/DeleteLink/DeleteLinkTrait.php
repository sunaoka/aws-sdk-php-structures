<?php

namespace Sunaoka\Aws\Structures\OAM\DeleteLink;

trait DeleteLinkTrait
{
    /**
     * @param DeleteLinkRequest $args
     * @return DeleteLinkResponse
     */
    public function deleteLink(DeleteLinkRequest $args)
    {
        $result = parent::deleteLink($args->toArray());
        return new DeleteLinkResponse($result->toArray());
    }
}
