<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateFarm;

trait UpdateFarmTrait
{
    /**
     * @param UpdateFarmRequest $args
     * @return UpdateFarmResponse
     */
    public function updateFarm(UpdateFarmRequest $args)
    {
        $result = parent::updateFarm($args->toArray());
        return new UpdateFarmResponse($result->toArray());
    }
}
