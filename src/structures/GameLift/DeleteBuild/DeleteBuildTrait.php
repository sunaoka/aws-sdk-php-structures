<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteBuild;

trait DeleteBuildTrait
{
    /**
     * @param DeleteBuildRequest $args
     * @return void
     */
    public function deleteBuild(DeleteBuildRequest $args)
    {
        parent::deleteBuild($args->toArray());
    }
}
