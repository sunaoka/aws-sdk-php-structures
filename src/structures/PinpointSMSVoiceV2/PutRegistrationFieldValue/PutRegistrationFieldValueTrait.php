<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\PutRegistrationFieldValue;

trait PutRegistrationFieldValueTrait
{
    /**
     * @param PutRegistrationFieldValueRequest $args
     * @return PutRegistrationFieldValueResponse
     */
    public function putRegistrationFieldValue(PutRegistrationFieldValueRequest $args)
    {
        $result = parent::putRegistrationFieldValue($args->toArray());
        return new PutRegistrationFieldValueResponse($result->toArray());
    }
}
