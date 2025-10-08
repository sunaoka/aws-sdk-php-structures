<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateGUISessionAccessDetails;

trait CreateGUISessionAccessDetailsTrait
{
    /**
     * @param CreateGUISessionAccessDetailsRequest $args
     * @return CreateGUISessionAccessDetailsResponse
     */
    public function createGUISessionAccessDetails(CreateGUISessionAccessDetailsRequest $args)
    {
        $result = parent::createGUISessionAccessDetails($args->toArray());
        return new CreateGUISessionAccessDetailsResponse($result->toArray());
    }
}
