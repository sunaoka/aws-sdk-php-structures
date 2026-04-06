<?php

namespace Sunaoka\Aws\Structures\Repostspace\RegisterAdmin;

trait RegisterAdminTrait
{
    /**
     * @param RegisterAdminRequest $args
     * @return void
     */
    public function registerAdmin(RegisterAdminRequest $args)
    {
        parent::registerAdmin($args->toArray());
    }
}
