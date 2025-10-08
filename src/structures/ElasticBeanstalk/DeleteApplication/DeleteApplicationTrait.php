<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DeleteApplication;

trait DeleteApplicationTrait
{
    /**
     * @param DeleteApplicationRequest $args
     * @return void
     */
    public function deleteApplication(DeleteApplicationRequest $args)
    {
        parent::deleteApplication($args->toArray());
    }
}
