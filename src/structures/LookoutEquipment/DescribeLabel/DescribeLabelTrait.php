<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeLabel;

trait DescribeLabelTrait
{
    /**
     * @param DescribeLabelRequest $args
     * @return DescribeLabelResponse
     */
    public function describeLabel(DescribeLabelRequest $args)
    {
        $result = parent::describeLabel($args->toArray());
        return new DescribeLabelResponse($result->toArray());
    }
}
