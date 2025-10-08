<?php

namespace Sunaoka\Aws\Structures\DataExchange\UpdateRevision;

trait UpdateRevisionTrait
{
    /**
     * @param UpdateRevisionRequest $args
     * @return UpdateRevisionResponse
     */
    public function updateRevision(UpdateRevisionRequest $args)
    {
        $result = parent::updateRevision($args->toArray());
        return new UpdateRevisionResponse($result->toArray());
    }
}
