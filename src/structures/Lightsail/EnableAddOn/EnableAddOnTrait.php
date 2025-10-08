<?php

namespace Sunaoka\Aws\Structures\Lightsail\EnableAddOn;

trait EnableAddOnTrait
{
    /**
     * @param EnableAddOnRequest $args
     * @return EnableAddOnResponse
     */
    public function enableAddOn(EnableAddOnRequest $args)
    {
        $result = parent::enableAddOn($args->toArray());
        return new EnableAddOnResponse($result->toArray());
    }
}
