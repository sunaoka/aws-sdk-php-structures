<?php

namespace Sunaoka\Aws\Structures\Neptune\DeleteDBParameterGroup;

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
