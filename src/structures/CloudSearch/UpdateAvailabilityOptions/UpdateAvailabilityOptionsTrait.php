<?php

namespace Sunaoka\Aws\Structures\CloudSearch\UpdateAvailabilityOptions;

trait UpdateAvailabilityOptionsTrait
{
    /**
     * @param UpdateAvailabilityOptionsRequest $args
     * @return UpdateAvailabilityOptionsResponse
     */
    public function updateAvailabilityOptions(UpdateAvailabilityOptionsRequest $args)
    {
        $result = parent::updateAvailabilityOptions($args->toArray());
        return new UpdateAvailabilityOptionsResponse($result->toArray());
    }
}
