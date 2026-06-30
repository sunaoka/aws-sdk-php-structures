<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeContainerAssociation;

trait DescribeContainerAssociationTrait
{
    /**
     * @param DescribeContainerAssociationRequest $args
     * @return DescribeContainerAssociationResponse
     */
    public function describeContainerAssociation(DescribeContainerAssociationRequest $args)
    {
        $result = parent::describeContainerAssociation($args->toArray());
        return new DescribeContainerAssociationResponse($result->toArray());
    }
}
