<?php

namespace Sunaoka\Aws\Structures\MTurk\GetHIT;

trait GetHITTrait
{
    /**
     * @param GetHITRequest $args
     * @return GetHITResponse
     */
    public function getHIT(GetHITRequest $args)
    {
        $result = parent::getHIT($args->toArray());
        return new GetHITResponse($result->toArray());
    }
}
