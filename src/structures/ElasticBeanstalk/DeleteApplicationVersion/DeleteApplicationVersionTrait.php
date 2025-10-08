<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DeleteApplicationVersion;

trait DeleteApplicationVersionTrait
{
    /**
     * @param DeleteApplicationVersionRequest $args
     * @return void
     */
    public function deleteApplicationVersion(DeleteApplicationVersionRequest $args)
    {
        parent::deleteApplicationVersion($args->toArray());
    }
}
