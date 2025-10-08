<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAssociation;

trait DescribeAssociationTrait
{
    /**
     * @param DescribeAssociationRequest $args
     * @return DescribeAssociationResponse
     */
    public function describeAssociation(DescribeAssociationRequest $args)
    {
        $result = parent::describeAssociation($args->toArray());
        return new DescribeAssociationResponse($result->toArray());
    }
}
