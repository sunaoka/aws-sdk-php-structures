<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateSdiSource;

trait CreateSdiSourceTrait
{
    /**
     * @param CreateSdiSourceRequest $args
     * @return CreateSdiSourceResponse
     */
    public function createSdiSource(CreateSdiSourceRequest $args)
    {
        $result = parent::createSdiSource($args->toArray());
        return new CreateSdiSourceResponse($result->toArray());
    }
}
