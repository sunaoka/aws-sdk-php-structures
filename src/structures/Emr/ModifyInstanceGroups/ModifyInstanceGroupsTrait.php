<?php

namespace Sunaoka\Aws\Structures\Emr\ModifyInstanceGroups;

trait ModifyInstanceGroupsTrait
{
    /**
     * @param ModifyInstanceGroupsRequest $args
     * @return void
     */
    public function modifyInstanceGroups(ModifyInstanceGroupsRequest $args)
    {
        parent::modifyInstanceGroups($args->toArray());
    }
}
