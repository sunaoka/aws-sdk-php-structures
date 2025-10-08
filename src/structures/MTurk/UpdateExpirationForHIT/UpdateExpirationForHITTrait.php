<?php

namespace Sunaoka\Aws\Structures\MTurk\UpdateExpirationForHIT;

trait UpdateExpirationForHITTrait
{
    /**
     * @param UpdateExpirationForHITRequest $args
     * @return UpdateExpirationForHITResponse
     */
    public function updateExpirationForHIT(UpdateExpirationForHITRequest $args)
    {
        $result = parent::updateExpirationForHIT($args->toArray());
        return new UpdateExpirationForHITResponse($result->toArray());
    }
}
