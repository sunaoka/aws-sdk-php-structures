<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\GetPublisher;

trait GetPublisherTrait
{
    /**
     * @param GetPublisherRequest $args
     * @return GetPublisherResponse
     */
    public function getPublisher(GetPublisherRequest $args)
    {
        $result = parent::getPublisher($args->toArray());
        return new GetPublisherResponse($result->toArray());
    }
}
