<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\RebuildEnvironment;

trait RebuildEnvironmentTrait
{
    /**
     * @param RebuildEnvironmentRequest $args
     * @return void
     */
    public function rebuildEnvironment(RebuildEnvironmentRequest $args)
    {
        parent::rebuildEnvironment($args->toArray());
    }
}
