<?php

namespace Sunaoka\Aws\Structures\Lightsail\DisableAddOn;

trait DisableAddOnTrait
{
    /**
     * @param DisableAddOnRequest $args
     * @return DisableAddOnResponse
     */
    public function disableAddOn(DisableAddOnRequest $args)
    {
        $result = parent::disableAddOn($args->toArray());
        return new DisableAddOnResponse($result->toArray());
    }
}
