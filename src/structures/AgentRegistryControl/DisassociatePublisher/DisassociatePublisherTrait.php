<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\DisassociatePublisher;

trait DisassociatePublisherTrait
{
    /**
     * @param DisassociatePublisherRequest $args
     * @return void
     */
    public function disassociatePublisher(DisassociatePublisherRequest $args)
    {
        parent::disassociatePublisher($args->toArray());
    }
}
