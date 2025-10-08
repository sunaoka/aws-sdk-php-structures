<?php

namespace Sunaoka\Aws\Structures\LicenseManager\DeleteGrant;

trait DeleteGrantTrait
{
    /**
     * @param DeleteGrantRequest $args
     * @return DeleteGrantResponse
     */
    public function deleteGrant(DeleteGrantRequest $args)
    {
        $result = parent::deleteGrant($args->toArray());
        return new DeleteGrantResponse($result->toArray());
    }
}
