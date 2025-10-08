<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteRetentionConfiguration;

trait DeleteRetentionConfigurationTrait
{
    /**
     * @param DeleteRetentionConfigurationRequest $args
     * @return void
     */
    public function deleteRetentionConfiguration(DeleteRetentionConfigurationRequest $args)
    {
        parent::deleteRetentionConfiguration($args->toArray());
    }
}
