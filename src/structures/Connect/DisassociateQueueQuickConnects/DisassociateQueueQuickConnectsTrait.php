<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateQueueQuickConnects;

trait DisassociateQueueQuickConnectsTrait
{
    /**
     * @param DisassociateQueueQuickConnectsRequest $args
     * @return void
     */
    public function disassociateQueueQuickConnects(DisassociateQueueQuickConnectsRequest $args)
    {
        parent::disassociateQueueQuickConnects($args->toArray());
    }
}
