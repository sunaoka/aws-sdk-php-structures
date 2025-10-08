<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateQueueQuickConnects;

trait AssociateQueueQuickConnectsTrait
{
    /**
     * @param AssociateQueueQuickConnectsRequest $args
     * @return void
     */
    public function associateQueueQuickConnects(AssociateQueueQuickConnectsRequest $args)
    {
        parent::associateQueueQuickConnects($args->toArray());
    }
}
