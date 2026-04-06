<?php

namespace Sunaoka\Aws\Structures\Repostspace\DeregisterAdmin;

trait DeregisterAdminTrait
{
    /**
     * @param DeregisterAdminRequest $args
     * @return void
     */
    public function deregisterAdmin(DeregisterAdminRequest $args)
    {
        parent::deregisterAdmin($args->toArray());
    }
}
