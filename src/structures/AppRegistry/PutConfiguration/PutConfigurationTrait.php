<?php

namespace Sunaoka\Aws\Structures\AppRegistry\PutConfiguration;

trait PutConfigurationTrait
{
    /**
     * @param PutConfigurationRequest $args
     * @return void
     */
    public function putConfiguration(PutConfigurationRequest $args)
    {
        parent::putConfiguration($args->toArray());
    }
}
