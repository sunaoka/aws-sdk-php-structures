<?php

namespace Sunaoka\Aws\Structures\Deadline\DeleteFarm;

trait DeleteFarmTrait
{
    /**
     * @param DeleteFarmRequest $args
     * @return DeleteFarmResponse
     */
    public function deleteFarm(DeleteFarmRequest $args)
    {
        $result = parent::deleteFarm($args->toArray());
        return new DeleteFarmResponse($result->toArray());
    }
}
