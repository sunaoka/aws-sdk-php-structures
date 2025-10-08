<?php

namespace Sunaoka\Aws\Structures\DAX\IncreaseReplicationFactor;

trait IncreaseReplicationFactorTrait
{
    /**
     * @param IncreaseReplicationFactorRequest $args
     * @return IncreaseReplicationFactorResponse
     */
    public function increaseReplicationFactor(IncreaseReplicationFactorRequest $args)
    {
        $result = parent::increaseReplicationFactor($args->toArray());
        return new IncreaseReplicationFactorResponse($result->toArray());
    }
}
