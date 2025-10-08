<?php

namespace Sunaoka\Aws\Structures\DAX\DecreaseReplicationFactor;

trait DecreaseReplicationFactorTrait
{
    /**
     * @param DecreaseReplicationFactorRequest $args
     * @return DecreaseReplicationFactorResponse
     */
    public function decreaseReplicationFactor(DecreaseReplicationFactorRequest $args)
    {
        $result = parent::decreaseReplicationFactor($args->toArray());
        return new DecreaseReplicationFactorResponse($result->toArray());
    }
}
