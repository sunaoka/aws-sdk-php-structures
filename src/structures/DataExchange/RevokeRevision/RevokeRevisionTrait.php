<?php

namespace Sunaoka\Aws\Structures\DataExchange\RevokeRevision;

trait RevokeRevisionTrait
{
    /**
     * @param RevokeRevisionRequest $args
     * @return RevokeRevisionResponse
     */
    public function revokeRevision(RevokeRevisionRequest $args)
    {
        $result = parent::revokeRevision($args->toArray());
        return new RevokeRevisionResponse($result->toArray());
    }
}
