<?php

namespace Sunaoka\Aws\Structures\CloudHsm\DescribeHsm;

trait DescribeHsmTrait
{
    /**
     * @param DescribeHsmRequest $args
     * @return DescribeHsmResponse
     */
    public function describeHsm(DescribeHsmRequest $args)
    {
        $result = parent::describeHsm($args->toArray());
        return new DescribeHsmResponse($result->toArray());
    }
}
