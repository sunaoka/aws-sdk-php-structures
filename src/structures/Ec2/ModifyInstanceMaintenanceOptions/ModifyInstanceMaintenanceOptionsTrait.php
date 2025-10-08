<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceMaintenanceOptions;

trait ModifyInstanceMaintenanceOptionsTrait
{
    /**
     * @param ModifyInstanceMaintenanceOptionsRequest $args
     * @return ModifyInstanceMaintenanceOptionsResponse
     */
    public function modifyInstanceMaintenanceOptions(ModifyInstanceMaintenanceOptionsRequest $args)
    {
        $result = parent::modifyInstanceMaintenanceOptions($args->toArray());
        return new ModifyInstanceMaintenanceOptionsResponse($result->toArray());
    }
}
