<?php

namespace Sunaoka\Aws\Structures\mgn\DeleteVcenterClient;

trait DeleteVcenterClientTrait
{
    /**
     * @param DeleteVcenterClientRequest $args
     * @return void
     */
    public function deleteVcenterClient(DeleteVcenterClientRequest $args)
    {
        parent::deleteVcenterClient($args->toArray());
    }
}
