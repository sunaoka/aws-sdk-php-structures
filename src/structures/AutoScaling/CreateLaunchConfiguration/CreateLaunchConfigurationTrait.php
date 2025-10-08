<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CreateLaunchConfiguration;

trait CreateLaunchConfigurationTrait
{
    /**
     * @param CreateLaunchConfigurationRequest $args
     * @return void
     */
    public function createLaunchConfiguration(CreateLaunchConfigurationRequest $args)
    {
        parent::createLaunchConfiguration($args->toArray());
    }
}
