<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\DescribeRepositoryAssociation;

trait DescribeRepositoryAssociationTrait
{
    /**
     * @param DescribeRepositoryAssociationRequest $args
     * @return DescribeRepositoryAssociationResponse
     */
    public function describeRepositoryAssociation(DescribeRepositoryAssociationRequest $args)
    {
        $result = parent::describeRepositoryAssociation($args->toArray());
        return new DescribeRepositoryAssociationResponse($result->toArray());
    }
}
