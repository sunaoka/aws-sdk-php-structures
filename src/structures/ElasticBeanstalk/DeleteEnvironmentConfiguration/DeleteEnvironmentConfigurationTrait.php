<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DeleteEnvironmentConfiguration;

trait DeleteEnvironmentConfigurationTrait
{
    /**
     * @param DeleteEnvironmentConfigurationRequest $args
     * @return void
     */
    public function deleteEnvironmentConfiguration(DeleteEnvironmentConfigurationRequest $args)
    {
        parent::deleteEnvironmentConfiguration($args->toArray());
    }
}
