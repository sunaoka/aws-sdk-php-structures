<?php

namespace Sunaoka\Aws\Structures\Ses\DeleteConfigurationSetEventDestination;

trait DeleteConfigurationSetEventDestinationTrait
{
    /**
     * @param DeleteConfigurationSetEventDestinationRequest $args
     * @return DeleteConfigurationSetEventDestinationResponse
     */
    public function deleteConfigurationSetEventDestination(DeleteConfigurationSetEventDestinationRequest $args)
    {
        $result = parent::deleteConfigurationSetEventDestination($args->toArray());
        return new DeleteConfigurationSetEventDestinationResponse($result->toArray());
    }
}
