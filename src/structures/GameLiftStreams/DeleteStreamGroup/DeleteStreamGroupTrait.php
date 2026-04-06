<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\DeleteStreamGroup;

trait DeleteStreamGroupTrait
{
    /**
     * @param DeleteStreamGroupRequest $args
     * @return void
     */
    public function deleteStreamGroup(DeleteStreamGroupRequest $args)
    {
        parent::deleteStreamGroup($args->toArray());
    }
}
