<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateSipMediaApplicationCall;

trait UpdateSipMediaApplicationCallTrait
{
    /**
     * @param UpdateSipMediaApplicationCallRequest $args
     * @return UpdateSipMediaApplicationCallResponse
     */
    public function updateSipMediaApplicationCall(UpdateSipMediaApplicationCallRequest $args)
    {
        $result = parent::updateSipMediaApplicationCall($args->toArray());
        return new UpdateSipMediaApplicationCallResponse($result->toArray());
    }
}
