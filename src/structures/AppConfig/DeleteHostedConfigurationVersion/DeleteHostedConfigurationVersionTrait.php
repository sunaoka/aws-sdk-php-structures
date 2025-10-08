<?php

namespace Sunaoka\Aws\Structures\AppConfig\DeleteHostedConfigurationVersion;

trait DeleteHostedConfigurationVersionTrait
{
    /**
     * @param DeleteHostedConfigurationVersionRequest $args
     * @return void
     */
    public function deleteHostedConfigurationVersion(DeleteHostedConfigurationVersionRequest $args)
    {
        parent::deleteHostedConfigurationVersion($args->toArray());
    }
}
