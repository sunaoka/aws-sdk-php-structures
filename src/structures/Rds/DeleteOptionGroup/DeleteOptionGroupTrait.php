<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteOptionGroup;

trait DeleteOptionGroupTrait
{
    /**
     * @param DeleteOptionGroupRequest $args
     * @return void
     */
    public function deleteOptionGroup(DeleteOptionGroupRequest $args)
    {
        parent::deleteOptionGroup($args->toArray());
    }
}
