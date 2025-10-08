<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\PutMLConfiguration;

trait PutMLConfigurationTrait
{
    /**
     * @param PutMLConfigurationRequest $args
     * @return void
     */
    public function putMLConfiguration(PutMLConfigurationRequest $args)
    {
        parent::putMLConfiguration($args->toArray());
    }
}
