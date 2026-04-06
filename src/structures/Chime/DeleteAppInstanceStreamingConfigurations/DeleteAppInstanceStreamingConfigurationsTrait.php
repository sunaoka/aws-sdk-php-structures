<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteAppInstanceStreamingConfigurations;

trait DeleteAppInstanceStreamingConfigurationsTrait
{
    /**
     * @param DeleteAppInstanceStreamingConfigurationsRequest $args
     * @return void
     */
    public function deleteAppInstanceStreamingConfigurations(DeleteAppInstanceStreamingConfigurationsRequest $args)
    {
        parent::deleteAppInstanceStreamingConfigurations($args->toArray());
    }
}
