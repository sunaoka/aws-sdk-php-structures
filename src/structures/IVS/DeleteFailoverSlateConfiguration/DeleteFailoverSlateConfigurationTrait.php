<?php

namespace Sunaoka\Aws\Structures\IVS\DeleteFailoverSlateConfiguration;

trait DeleteFailoverSlateConfigurationTrait
{
    /**
     * @param DeleteFailoverSlateConfigurationRequest $args
     * @return void
     */
    public function deleteFailoverSlateConfiguration(DeleteFailoverSlateConfigurationRequest $args)
    {
        parent::deleteFailoverSlateConfiguration($args->toArray());
    }
}
