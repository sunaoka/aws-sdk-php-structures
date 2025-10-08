<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteOptedOutNumber;

trait DeleteOptedOutNumberTrait
{
    /**
     * @param DeleteOptedOutNumberRequest $args
     * @return DeleteOptedOutNumberResponse
     */
    public function deleteOptedOutNumber(DeleteOptedOutNumberRequest $args)
    {
        $result = parent::deleteOptedOutNumber($args->toArray());
        return new DeleteOptedOutNumberResponse($result->toArray());
    }
}
