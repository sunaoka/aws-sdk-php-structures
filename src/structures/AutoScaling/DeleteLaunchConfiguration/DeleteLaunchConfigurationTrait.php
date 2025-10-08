<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DeleteLaunchConfiguration;

trait DeleteLaunchConfigurationTrait
{
    /**
     * @param DeleteLaunchConfigurationRequest $args
     * @return void
     */
    public function deleteLaunchConfiguration(DeleteLaunchConfigurationRequest $args)
    {
        parent::deleteLaunchConfiguration($args->toArray());
    }
}
