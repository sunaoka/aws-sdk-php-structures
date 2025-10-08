<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteHsmConfiguration;

trait DeleteHsmConfigurationTrait
{
    /**
     * @param DeleteHsmConfigurationRequest $args
     * @return void
     */
    public function deleteHsmConfiguration(DeleteHsmConfigurationRequest $args)
    {
        parent::deleteHsmConfiguration($args->toArray());
    }
}
