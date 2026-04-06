<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteEnvironmentAction;

trait DeleteEnvironmentActionTrait
{
    /**
     * @param DeleteEnvironmentActionRequest $args
     * @return void
     */
    public function deleteEnvironmentAction(DeleteEnvironmentActionRequest $args)
    {
        parent::deleteEnvironmentAction($args->toArray());
    }
}
