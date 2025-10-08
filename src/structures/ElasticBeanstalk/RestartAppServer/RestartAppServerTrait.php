<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\RestartAppServer;

trait RestartAppServerTrait
{
    /**
     * @param RestartAppServerRequest $args
     * @return void
     */
    public function restartAppServer(RestartAppServerRequest $args)
    {
        parent::restartAppServer($args->toArray());
    }
}
