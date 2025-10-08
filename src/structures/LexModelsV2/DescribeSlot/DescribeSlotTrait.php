<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlot;

trait DescribeSlotTrait
{
    /**
     * @param DescribeSlotRequest $args
     * @return DescribeSlotResponse
     */
    public function describeSlot(DescribeSlotRequest $args)
    {
        $result = parent::describeSlot($args->toArray());
        return new DescribeSlotResponse($result->toArray());
    }
}
