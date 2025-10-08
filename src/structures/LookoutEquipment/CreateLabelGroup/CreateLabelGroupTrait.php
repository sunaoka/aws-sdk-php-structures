<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateLabelGroup;

trait CreateLabelGroupTrait
{
    /**
     * @param CreateLabelGroupRequest $args
     * @return CreateLabelGroupResponse
     */
    public function createLabelGroup(CreateLabelGroupRequest $args)
    {
        $result = parent::createLabelGroup($args->toArray());
        return new CreateLabelGroupResponse($result->toArray());
    }
}
