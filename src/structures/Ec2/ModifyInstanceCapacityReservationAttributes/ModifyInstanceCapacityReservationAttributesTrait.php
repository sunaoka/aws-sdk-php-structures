<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceCapacityReservationAttributes;

trait ModifyInstanceCapacityReservationAttributesTrait
{
    /**
     * @param ModifyInstanceCapacityReservationAttributesRequest $args
     * @return ModifyInstanceCapacityReservationAttributesResponse
     */
    public function modifyInstanceCapacityReservationAttributes(
        ModifyInstanceCapacityReservationAttributesRequest $args,
    ) {
        $result = parent::modifyInstanceCapacityReservationAttributes($args->toArray());
        return new ModifyInstanceCapacityReservationAttributesResponse($result->toArray());
    }
}
