<?php

namespace Sunaoka\Aws\Structures\FMS\DeleteAppsList;

trait DeleteAppsListTrait
{
    /**
     * @param DeleteAppsListRequest $args
     * @return void
     */
    public function deleteAppsList(DeleteAppsListRequest $args)
    {
        parent::deleteAppsList($args->toArray());
    }
}
