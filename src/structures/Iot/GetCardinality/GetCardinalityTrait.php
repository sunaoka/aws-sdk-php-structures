<?php

namespace Sunaoka\Aws\Structures\Iot\GetCardinality;

trait GetCardinalityTrait
{
    /**
     * @param GetCardinalityRequest $args
     * @return GetCardinalityResponse
     */
    public function getCardinality(GetCardinalityRequest $args)
    {
        $result = parent::getCardinality($args->toArray());
        return new GetCardinalityResponse($result->toArray());
    }
}
