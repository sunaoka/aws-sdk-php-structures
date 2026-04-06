<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\DescribeNodeAssociationStatus;

trait DescribeNodeAssociationStatusTrait
{
    /**
     * @param DescribeNodeAssociationStatusRequest $args
     * @return DescribeNodeAssociationStatusResponse
     */
    public function describeNodeAssociationStatus(DescribeNodeAssociationStatusRequest $args)
    {
        $result = parent::describeNodeAssociationStatus($args->toArray());
        return new DescribeNodeAssociationStatusResponse($result->toArray());
    }
}
