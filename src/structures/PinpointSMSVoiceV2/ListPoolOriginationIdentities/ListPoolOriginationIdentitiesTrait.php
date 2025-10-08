<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ListPoolOriginationIdentities;

trait ListPoolOriginationIdentitiesTrait
{
    /**
     * @param ListPoolOriginationIdentitiesRequest $args
     * @return ListPoolOriginationIdentitiesResponse
     */
    public function listPoolOriginationIdentities(ListPoolOriginationIdentitiesRequest $args)
    {
        $result = parent::listPoolOriginationIdentities($args->toArray());
        return new ListPoolOriginationIdentitiesResponse($result->toArray());
    }
}
