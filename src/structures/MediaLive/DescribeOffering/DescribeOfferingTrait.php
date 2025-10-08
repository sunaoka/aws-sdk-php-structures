<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeOffering;

trait DescribeOfferingTrait
{
    /**
     * @param DescribeOfferingRequest $args
     * @return DescribeOfferingResponse
     */
    public function describeOffering(DescribeOfferingRequest $args)
    {
        $result = parent::describeOffering($args->toArray());
        return new DescribeOfferingResponse($result->toArray());
    }
}
