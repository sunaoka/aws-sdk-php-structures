<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeReturnShippingLabel;

trait DescribeReturnShippingLabelTrait
{
    /**
     * @param DescribeReturnShippingLabelRequest $args
     * @return DescribeReturnShippingLabelResponse
     */
    public function describeReturnShippingLabel(DescribeReturnShippingLabelRequest $args)
    {
        $result = parent::describeReturnShippingLabel($args->toArray());
        return new DescribeReturnShippingLabelResponse($result->toArray());
    }
}
