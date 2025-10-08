<?php

namespace Sunaoka\Aws\Structures\S3Control\PutStorageLensConfiguration;

trait PutStorageLensConfigurationTrait
{
    /**
     * @param PutStorageLensConfigurationRequest $args
     * @return void
     */
    public function putStorageLensConfiguration(PutStorageLensConfigurationRequest $args)
    {
        parent::putStorageLensConfiguration($args->toArray());
    }
}
