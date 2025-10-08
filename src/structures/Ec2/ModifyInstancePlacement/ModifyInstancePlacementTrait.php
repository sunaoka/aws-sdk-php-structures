<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstancePlacement;

trait ModifyInstancePlacementTrait
{
    /**
     * @param ModifyInstancePlacementRequest $args
     * @return ModifyInstancePlacementResponse
     */
    public function modifyInstancePlacement(ModifyInstancePlacementRequest $args)
    {
        $result = parent::modifyInstancePlacement($args->toArray());
        return new ModifyInstancePlacementResponse($result->toArray());
    }
}
