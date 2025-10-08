<?php

namespace Sunaoka\Aws\Structures\OAM\CreateSink;

trait CreateSinkTrait
{
    /**
     * @param CreateSinkRequest $args
     * @return CreateSinkResponse
     */
    public function createSink(CreateSinkRequest $args)
    {
        $result = parent::createSink($args->toArray());
        return new CreateSinkResponse($result->toArray());
    }
}
