<?php

namespace Sunaoka\Aws\Structures\SesV2\GetReputationEntity;

trait GetReputationEntityTrait
{
    /**
     * @param GetReputationEntityRequest $args
     * @return GetReputationEntityResponse
     */
    public function getReputationEntity(GetReputationEntityRequest $args)
    {
        $result = parent::getReputationEntity($args->toArray());
        return new GetReputationEntityResponse($result->toArray());
    }
}
