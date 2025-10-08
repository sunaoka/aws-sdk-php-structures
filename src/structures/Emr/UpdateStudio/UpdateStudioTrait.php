<?php

namespace Sunaoka\Aws\Structures\Emr\UpdateStudio;

trait UpdateStudioTrait
{
    /**
     * @param UpdateStudioRequest $args
     * @return void
     */
    public function updateStudio(UpdateStudioRequest $args)
    {
        parent::updateStudio($args->toArray());
    }
}
