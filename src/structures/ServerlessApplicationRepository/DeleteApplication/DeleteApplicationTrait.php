<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\DeleteApplication;

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
