<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateTapes;

trait CreateTapesTrait
{
    /**
     * @param CreateTapesRequest $args
     * @return CreateTapesResponse
     */
    public function createTapes(CreateTapesRequest $args)
    {
        $result = parent::createTapes($args->toArray());
        return new CreateTapesResponse($result->toArray());
    }
}
