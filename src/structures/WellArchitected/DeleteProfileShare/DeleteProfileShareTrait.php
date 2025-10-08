<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteProfileShare;

trait DeleteProfileShareTrait
{
    /**
     * @param DeleteProfileShareRequest $args
     * @return void
     */
    public function deleteProfileShare(DeleteProfileShareRequest $args)
    {
        parent::deleteProfileShare($args->toArray());
    }
}
