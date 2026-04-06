<?php

namespace Sunaoka\Aws\Structures\ElasticInference\DescribeAcceleratorOfferings;

trait DescribeAcceleratorOfferingsTrait
{
    /**
     * @param DescribeAcceleratorOfferingsRequest $args
     * @return DescribeAcceleratorOfferingsResponse
     */
    public function describeAcceleratorOfferings(DescribeAcceleratorOfferingsRequest $args)
    {
        $result = parent::describeAcceleratorOfferings($args->toArray());
        return new DescribeAcceleratorOfferingsResponse($result->toArray());
    }
}
