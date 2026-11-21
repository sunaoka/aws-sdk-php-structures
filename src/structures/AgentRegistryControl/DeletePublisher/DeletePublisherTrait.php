<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\DeletePublisher;

trait DeletePublisherTrait
{
    /**
     * @param DeletePublisherRequest $args
     * @return void
     */
    public function deletePublisher(DeletePublisherRequest $args)
    {
        parent::deletePublisher($args->toArray());
    }
}
