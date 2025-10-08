<?php

namespace Sunaoka\Aws\Structures\MTurk\UpdateHITTypeOfHIT;

trait UpdateHITTypeOfHITTrait
{
    /**
     * @param UpdateHITTypeOfHITRequest $args
     * @return UpdateHITTypeOfHITResponse
     */
    public function updateHITTypeOfHIT(UpdateHITTypeOfHITRequest $args)
    {
        $result = parent::updateHITTypeOfHIT($args->toArray());
        return new UpdateHITTypeOfHITResponse($result->toArray());
    }
}
