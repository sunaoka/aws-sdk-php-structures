<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\AssociatePublisher;

trait AssociatePublisherTrait
{
    /**
     * @param AssociatePublisherRequest $args
     * @return AssociatePublisherResponse
     */
    public function associatePublisher(AssociatePublisherRequest $args)
    {
        $result = parent::associatePublisher($args->toArray());
        return new AssociatePublisherResponse($result->toArray());
    }
}
