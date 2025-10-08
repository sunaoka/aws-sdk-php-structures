<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListLabelGroups;

trait ListLabelGroupsTrait
{
    /**
     * @param ListLabelGroupsRequest $args
     * @return ListLabelGroupsResponse
     */
    public function listLabelGroups(ListLabelGroupsRequest $args)
    {
        $result = parent::listLabelGroups($args->toArray());
        return new ListLabelGroupsResponse($result->toArray());
    }
}
