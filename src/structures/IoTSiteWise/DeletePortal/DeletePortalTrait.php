<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeletePortal;

trait DeletePortalTrait
{
    /**
     * @param DeletePortalRequest $args
     * @return DeletePortalResponse
     */
    public function deletePortal(DeletePortalRequest $args)
    {
        $result = parent::deletePortal($args->toArray());
        return new DeletePortalResponse($result->toArray());
    }
}
