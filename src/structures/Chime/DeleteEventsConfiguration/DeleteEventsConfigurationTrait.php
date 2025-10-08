<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteEventsConfiguration;

trait DeleteEventsConfigurationTrait
{
    /**
     * @param DeleteEventsConfigurationRequest $args
     * @return void
     */
    public function deleteEventsConfiguration(DeleteEventsConfigurationRequest $args)
    {
        parent::deleteEventsConfiguration($args->toArray());
    }
}
