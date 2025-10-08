<?php

namespace Sunaoka\Aws\Structures\Organizations\DescribeCreateAccountStatus;

trait DescribeCreateAccountStatusTrait
{
    /**
     * @param DescribeCreateAccountStatusRequest $args
     * @return DescribeCreateAccountStatusResponse
     */
    public function describeCreateAccountStatus(DescribeCreateAccountStatusRequest $args)
    {
        $result = parent::describeCreateAccountStatus($args->toArray());
        return new DescribeCreateAccountStatusResponse($result->toArray());
    }
}
