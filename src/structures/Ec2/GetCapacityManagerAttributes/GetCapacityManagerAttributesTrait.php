<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCapacityManagerAttributes;

trait GetCapacityManagerAttributesTrait
{
    /**
     * @param GetCapacityManagerAttributesRequest $args
     * @return GetCapacityManagerAttributesResponse
     */
    public function getCapacityManagerAttributes(GetCapacityManagerAttributesRequest $args)
    {
        $result = parent::getCapacityManagerAttributes($args->toArray());
        return new GetCapacityManagerAttributesResponse($result->toArray());
    }
}
