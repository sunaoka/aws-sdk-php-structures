<?php

namespace Sunaoka\Aws\Structures\Emr\DeleteStudio;

trait DeleteStudioTrait
{
    /**
     * @param DeleteStudioRequest $args
     * @return void
     */
    public function deleteStudio(DeleteStudioRequest $args)
    {
        parent::deleteStudio($args->toArray());
    }
}
