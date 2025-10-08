<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListOfferingPromotions;

trait ListOfferingPromotionsTrait
{
    /**
     * @param ListOfferingPromotionsRequest $args
     * @return ListOfferingPromotionsResponse
     */
    public function listOfferingPromotions(ListOfferingPromotionsRequest $args)
    {
        $result = parent::listOfferingPromotions($args->toArray());
        return new ListOfferingPromotionsResponse($result->toArray());
    }
}
