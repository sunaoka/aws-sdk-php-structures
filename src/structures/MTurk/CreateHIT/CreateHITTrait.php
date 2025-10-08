<?php

namespace Sunaoka\Aws\Structures\MTurk\CreateHIT;

trait CreateHITTrait
{
    /**
     * @param CreateHITRequest $args
     * @return CreateHITResponse
     */
    public function createHIT(CreateHITRequest $args)
    {
        $result = parent::createHIT($args->toArray());
        return new CreateHITResponse($result->toArray());
    }
}
