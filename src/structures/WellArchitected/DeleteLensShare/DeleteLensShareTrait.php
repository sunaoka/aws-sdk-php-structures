<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteLensShare;

trait DeleteLensShareTrait
{
    /**
     * @param DeleteLensShareRequest $args
     * @return void
     */
    public function deleteLensShare(DeleteLensShareRequest $args)
    {
        parent::deleteLensShare($args->toArray());
    }
}
