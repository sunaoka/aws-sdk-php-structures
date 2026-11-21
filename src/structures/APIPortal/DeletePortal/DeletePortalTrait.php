<?php

namespace Sunaoka\Aws\Structures\APIPortal\DeletePortal;

trait DeletePortalTrait
{
    /**
     * @param DeletePortalRequest $args
     * @return void
     */
    public function deletePortal(DeletePortalRequest $args)
    {
        parent::deletePortal($args->toArray());
    }
}
