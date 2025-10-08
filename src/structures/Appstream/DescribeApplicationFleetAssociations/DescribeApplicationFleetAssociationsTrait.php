<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeApplicationFleetAssociations;

trait DescribeApplicationFleetAssociationsTrait
{
    /**
     * @param DescribeApplicationFleetAssociationsRequest $args
     * @return DescribeApplicationFleetAssociationsResponse
     */
    public function describeApplicationFleetAssociations(DescribeApplicationFleetAssociationsRequest $args)
    {
        $result = parent::describeApplicationFleetAssociations($args->toArray());
        return new DescribeApplicationFleetAssociationsResponse($result->toArray());
    }
}
