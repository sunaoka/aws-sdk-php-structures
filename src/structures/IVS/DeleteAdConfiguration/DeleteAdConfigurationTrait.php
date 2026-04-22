<?php

namespace Sunaoka\Aws\Structures\IVS\DeleteAdConfiguration;

trait DeleteAdConfigurationTrait
{
    /**
     * @param DeleteAdConfigurationRequest $args
     * @return void
     */
    public function deleteAdConfiguration(DeleteAdConfigurationRequest $args)
    {
        parent::deleteAdConfiguration($args->toArray());
    }
}
