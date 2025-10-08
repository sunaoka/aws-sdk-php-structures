<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateRevision;

trait CreateRevisionTrait
{
    /**
     * @param CreateRevisionRequest $args
     * @return CreateRevisionResponse
     */
    public function createRevision(CreateRevisionRequest $args)
    {
        $result = parent::createRevision($args->toArray());
        return new CreateRevisionResponse($result->toArray());
    }
}
