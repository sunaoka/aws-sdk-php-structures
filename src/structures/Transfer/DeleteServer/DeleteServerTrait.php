<?php

namespace Sunaoka\Aws\Structures\Transfer\DeleteServer;

trait DeleteServerTrait
{
    /**
     * @param DeleteServerRequest $args
     * @return void
     */
    public function deleteServer(DeleteServerRequest $args)
    {
        parent::deleteServer($args->toArray());
    }
}
