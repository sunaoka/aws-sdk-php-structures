<?php

namespace Sunaoka\Aws\Structures\B2bi\ListCapabilities;

trait ListCapabilitiesTrait
{
    /**
     * @param ListCapabilitiesRequest $args
     * @return ListCapabilitiesResponse
     */
    public function listCapabilities(ListCapabilitiesRequest $args)
    {
        $result = parent::listCapabilities($args->toArray());
        return new ListCapabilitiesResponse($result->toArray());
    }
}
