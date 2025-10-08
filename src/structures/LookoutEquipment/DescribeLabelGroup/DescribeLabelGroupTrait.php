<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeLabelGroup;

trait DescribeLabelGroupTrait
{
    /**
     * @param DescribeLabelGroupRequest $args
     * @return DescribeLabelGroupResponse
     */
    public function describeLabelGroup(DescribeLabelGroupRequest $args)
    {
        $result = parent::describeLabelGroup($args->toArray());
        return new DescribeLabelGroupResponse($result->toArray());
    }
}
