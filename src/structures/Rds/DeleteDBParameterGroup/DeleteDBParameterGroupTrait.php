<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBParameterGroup;

trait DeleteDBParameterGroupTrait
{
    /**
     * @param DeleteDBParameterGroupRequest $args
     * @return void
     */
    public function deleteDBParameterGroup(DeleteDBParameterGroupRequest $args)
    {
        parent::deleteDBParameterGroup($args->toArray());
    }
}
