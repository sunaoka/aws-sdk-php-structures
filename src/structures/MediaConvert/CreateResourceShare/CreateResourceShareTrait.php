<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateResourceShare;

trait CreateResourceShareTrait
{
    /**
     * @param CreateResourceShareRequest $args
     * @return CreateResourceShareResponse
     */
    public function createResourceShare(CreateResourceShareRequest $args)
    {
        $result = parent::createResourceShare($args->toArray());
        return new CreateResourceShareResponse($result->toArray());
    }
}
