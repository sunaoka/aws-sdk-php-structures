<?php

namespace Sunaoka\Aws\Structures\Acm\PutAccountConfiguration;

trait PutAccountConfigurationTrait
{
    /**
     * @param PutAccountConfigurationRequest $args
     * @return void
     */
    public function putAccountConfiguration(PutAccountConfigurationRequest $args)
    {
        parent::putAccountConfiguration($args->toArray());
    }
}
