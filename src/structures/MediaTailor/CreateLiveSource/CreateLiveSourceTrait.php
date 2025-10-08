<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateLiveSource;

trait CreateLiveSourceTrait
{
    /**
     * @param CreateLiveSourceRequest $args
     * @return CreateLiveSourceResponse
     */
    public function createLiveSource(CreateLiveSourceRequest $args)
    {
        $result = parent::createLiveSource($args->toArray());
        return new CreateLiveSourceResponse($result->toArray());
    }
}
