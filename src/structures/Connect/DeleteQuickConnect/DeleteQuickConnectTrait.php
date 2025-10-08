<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteQuickConnect;

trait DeleteQuickConnectTrait
{
    /**
     * @param DeleteQuickConnectRequest $args
     * @return void
     */
    public function deleteQuickConnect(DeleteQuickConnectRequest $args)
    {
        parent::deleteQuickConnect($args->toArray());
    }
}
