<?php

namespace Sunaoka\Aws\Structures\S3Control\DeleteStorageLensConfiguration;

trait DeleteStorageLensConfigurationTrait
{
    /**
     * @param DeleteStorageLensConfigurationRequest $args
     * @return void
     */
    public function deleteStorageLensConfiguration(DeleteStorageLensConfigurationRequest $args)
    {
        parent::deleteStorageLensConfiguration($args->toArray());
    }
}
