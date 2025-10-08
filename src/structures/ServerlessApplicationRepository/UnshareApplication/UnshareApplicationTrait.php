<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\UnshareApplication;

trait UnshareApplicationTrait
{
    /**
     * @param UnshareApplicationRequest $args
     * @return void
     */
    public function unshareApplication(UnshareApplicationRequest $args)
    {
        parent::unshareApplication($args->toArray());
    }
}
