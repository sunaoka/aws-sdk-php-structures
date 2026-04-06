<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\DeleteDirectoryRegistration;

trait DeleteDirectoryRegistrationTrait
{
    /**
     * @param DeleteDirectoryRegistrationRequest $args
     * @return void
     */
    public function deleteDirectoryRegistration(DeleteDirectoryRegistrationRequest $args)
    {
        parent::deleteDirectoryRegistration($args->toArray());
    }
}
