<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SetDefaultMessageType;

trait SetDefaultMessageTypeTrait
{
    /**
     * @param SetDefaultMessageTypeRequest $args
     * @return SetDefaultMessageTypeResponse
     */
    public function setDefaultMessageType(SetDefaultMessageTypeRequest $args)
    {
        $result = parent::setDefaultMessageType($args->toArray());
        return new SetDefaultMessageTypeResponse($result->toArray());
    }
}
