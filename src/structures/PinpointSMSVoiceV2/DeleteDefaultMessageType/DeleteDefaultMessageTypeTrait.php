<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteDefaultMessageType;

trait DeleteDefaultMessageTypeTrait
{
    /**
     * @param DeleteDefaultMessageTypeRequest $args
     * @return DeleteDefaultMessageTypeResponse
     */
    public function deleteDefaultMessageType(DeleteDefaultMessageTypeRequest $args)
    {
        $result = parent::deleteDefaultMessageType($args->toArray());
        return new DeleteDefaultMessageTypeResponse($result->toArray());
    }
}
