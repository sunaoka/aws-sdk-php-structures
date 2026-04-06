<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateApp;

trait UpdateAppTrait
{
    /**
     * @param UpdateAppRequest $args
     * @return void
     */
    public function updateApp(UpdateAppRequest $args)
    {
        parent::updateApp($args->toArray());
    }
}
