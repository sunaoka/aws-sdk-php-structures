<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetPropertyValue;

trait GetPropertyValueTrait
{
    /**
     * @param GetPropertyValueRequest $args
     * @return GetPropertyValueResponse
     */
    public function getPropertyValue(GetPropertyValueRequest $args)
    {
        $result = parent::getPropertyValue($args->toArray());
        return new GetPropertyValueResponse($result->toArray());
    }
}
