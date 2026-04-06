<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\ListDirectoryRegistrations;

trait ListDirectoryRegistrationsTrait
{
    /**
     * @param ListDirectoryRegistrationsRequest $args
     * @return ListDirectoryRegistrationsResponse
     */
    public function listDirectoryRegistrations(ListDirectoryRegistrationsRequest $args)
    {
        $result = parent::listDirectoryRegistrations($args->toArray());
        return new ListDirectoryRegistrationsResponse($result->toArray());
    }
}
