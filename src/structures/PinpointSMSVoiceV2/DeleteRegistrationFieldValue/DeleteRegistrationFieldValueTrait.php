<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteRegistrationFieldValue;

trait DeleteRegistrationFieldValueTrait
{
    /**
     * @param DeleteRegistrationFieldValueRequest $args
     * @return DeleteRegistrationFieldValueResponse
     */
    public function deleteRegistrationFieldValue(DeleteRegistrationFieldValueRequest $args)
    {
        $result = parent::deleteRegistrationFieldValue($args->toArray());
        return new DeleteRegistrationFieldValueResponse($result->toArray());
    }
}
