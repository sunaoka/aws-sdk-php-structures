<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\CreatePublisher;

trait CreatePublisherTrait
{
    /**
     * @param CreatePublisherRequest $args
     * @return CreatePublisherResponse
     */
    public function createPublisher(CreatePublisherRequest $args)
    {
        $result = parent::createPublisher($args->toArray());
        return new CreatePublisherResponse($result->toArray());
    }
}
