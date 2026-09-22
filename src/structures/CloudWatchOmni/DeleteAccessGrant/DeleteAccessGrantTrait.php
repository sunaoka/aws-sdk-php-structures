<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\DeleteAccessGrant;

trait DeleteAccessGrantTrait
{
    /**
     * @param DeleteAccessGrantRequest $args
     * @return DeleteAccessGrantResponse
     */
    public function deleteAccessGrant(DeleteAccessGrantRequest $args)
    {
        $result = parent::deleteAccessGrant($args->toArray());
        return new DeleteAccessGrantResponse($result->toArray());
    }
}
