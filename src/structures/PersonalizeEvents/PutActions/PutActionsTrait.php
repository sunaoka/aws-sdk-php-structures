<?php

namespace Sunaoka\Aws\Structures\PersonalizeEvents\PutActions;

trait PutActionsTrait
{
    /**
     * @param PutActionsRequest $args
     * @return void
     */
    public function putActions(PutActionsRequest $args)
    {
        parent::putActions($args->toArray());
    }
}
