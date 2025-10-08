<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyFleet;

trait ModifyFleetTrait
{
    /**
     * @param ModifyFleetRequest $args
     * @return ModifyFleetResponse
     */
    public function modifyFleet(ModifyFleetRequest $args)
    {
        $result = parent::modifyFleet($args->toArray());
        return new ModifyFleetResponse($result->toArray());
    }
}
