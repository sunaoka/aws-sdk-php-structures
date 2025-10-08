<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlotType;

trait DescribeSlotTypeTrait
{
    /**
     * @param DescribeSlotTypeRequest $args
     * @return DescribeSlotTypeResponse
     */
    public function describeSlotType(DescribeSlotTypeRequest $args)
    {
        $result = parent::describeSlotType($args->toArray());
        return new DescribeSlotTypeResponse($result->toArray());
    }
}
