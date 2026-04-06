<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\DeleteMLConfiguration;

trait DeleteMLConfigurationTrait
{
    /**
     * @param DeleteMLConfigurationRequest $args
     * @return void
     */
    public function deleteMLConfiguration(DeleteMLConfigurationRequest $args)
    {
        parent::deleteMLConfiguration($args->toArray());
    }
}
