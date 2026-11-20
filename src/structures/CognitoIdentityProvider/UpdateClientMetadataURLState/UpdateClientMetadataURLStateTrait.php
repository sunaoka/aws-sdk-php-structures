<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateClientMetadataURLState;

trait UpdateClientMetadataURLStateTrait
{
    /**
     * @param UpdateClientMetadataURLStateRequest $args
     * @return UpdateClientMetadataURLStateResponse
     */
    public function updateClientMetadataURLState(UpdateClientMetadataURLStateRequest $args)
    {
        $result = parent::updateClientMetadataURLState($args->toArray());
        return new UpdateClientMetadataURLStateResponse($result->toArray());
    }
}
