<?php

namespace Sunaoka\Aws\Structures\Emr\ModifyInstanceFleet;

trait ModifyInstanceFleetTrait
{
    /**
     * @param ModifyInstanceFleetRequest $args
     * @return void
     */
    public function modifyInstanceFleet(ModifyInstanceFleetRequest $args)
    {
        parent::modifyInstanceFleet($args->toArray());
    }
}
