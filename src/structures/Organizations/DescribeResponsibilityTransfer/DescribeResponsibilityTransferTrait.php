<?php

namespace Sunaoka\Aws\Structures\Organizations\DescribeResponsibilityTransfer;

trait DescribeResponsibilityTransferTrait
{
    /**
     * @param DescribeResponsibilityTransferRequest $args
     * @return DescribeResponsibilityTransferResponse
     */
    public function describeResponsibilityTransfer(DescribeResponsibilityTransferRequest $args)
    {
        $result = parent::describeResponsibilityTransfer($args->toArray());
        return new DescribeResponsibilityTransferResponse($result->toArray());
    }
}
