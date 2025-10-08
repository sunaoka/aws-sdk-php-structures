<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteRunGroup;

trait DeleteRunGroupTrait
{
    /**
     * @param DeleteRunGroupRequest $args
     * @return void
     */
    public function deleteRunGroup(DeleteRunGroupRequest $args)
    {
        parent::deleteRunGroup($args->toArray());
    }
}
