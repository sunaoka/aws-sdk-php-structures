<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\ValidatePublisher;

trait ValidatePublisherTrait
{
    /**
     * @param ValidatePublisherRequest $args
     * @return ValidatePublisherResponse
     */
    public function validatePublisher(ValidatePublisherRequest $args)
    {
        $result = parent::validatePublisher($args->toArray());
        return new ValidatePublisherResponse($result->toArray());
    }
}
