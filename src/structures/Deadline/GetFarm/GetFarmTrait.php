<?php

namespace Sunaoka\Aws\Structures\Deadline\GetFarm;

trait GetFarmTrait
{
    /**
     * @param GetFarmRequest $args
     * @return GetFarmResponse
     */
    public function getFarm(GetFarmRequest $args)
    {
        $result = parent::getFarm($args->toArray());
        return new GetFarmResponse($result->toArray());
    }
}
