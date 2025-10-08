<?php

namespace Sunaoka\Aws\Structures\CloudHsm\DescribeHapg;

trait DescribeHapgTrait
{
    /**
     * @param DescribeHapgRequest $args
     * @return DescribeHapgResponse
     */
    public function describeHapg(DescribeHapgRequest $args)
    {
        $result = parent::describeHapg($args->toArray());
        return new DescribeHapgResponse($result->toArray());
    }
}
