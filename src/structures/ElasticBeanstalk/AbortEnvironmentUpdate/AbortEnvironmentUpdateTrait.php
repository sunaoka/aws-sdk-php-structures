<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\AbortEnvironmentUpdate;

trait AbortEnvironmentUpdateTrait
{
    /**
     * @param AbortEnvironmentUpdateRequest $args
     * @return void
     */
    public function abortEnvironmentUpdate(AbortEnvironmentUpdateRequest $args)
    {
        parent::abortEnvironmentUpdate($args->toArray());
    }
}
