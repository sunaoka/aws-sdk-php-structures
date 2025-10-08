<?php

namespace Sunaoka\Aws\Structures\MTurk\DeleteHIT;

trait DeleteHITTrait
{
    /**
     * @param DeleteHITRequest $args
     * @return DeleteHITResponse
     */
    public function deleteHIT(DeleteHITRequest $args)
    {
        $result = parent::deleteHIT($args->toArray());
        return new DeleteHITResponse($result->toArray());
    }
}
