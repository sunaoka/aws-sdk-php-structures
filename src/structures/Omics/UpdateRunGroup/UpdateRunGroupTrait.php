<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateRunGroup;

trait UpdateRunGroupTrait
{
    /**
     * @param UpdateRunGroupRequest $args
     * @return void
     */
    public function updateRunGroup(UpdateRunGroupRequest $args)
    {
        parent::updateRunGroup($args->toArray());
    }
}
