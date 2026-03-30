<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteConfiguration;

trait DeleteConfigurationTrait
{
    /**
     * @param DeleteConfigurationRequest $args
     * @return void
     */
    public function deleteConfiguration(DeleteConfigurationRequest $args)
    {
        parent::deleteConfiguration($args->toArray());
    }
}
