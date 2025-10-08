<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateFarm;

trait CreateFarmTrait
{
    /**
     * @param CreateFarmRequest $args
     * @return CreateFarmResponse
     */
    public function createFarm(CreateFarmRequest $args)
    {
        $result = parent::createFarm($args->toArray());
        return new CreateFarmResponse($result->toArray());
    }
}
