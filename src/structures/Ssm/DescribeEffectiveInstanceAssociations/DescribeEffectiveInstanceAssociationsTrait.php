<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeEffectiveInstanceAssociations;

trait DescribeEffectiveInstanceAssociationsTrait
{
    /**
     * @param DescribeEffectiveInstanceAssociationsRequest $args
     * @return DescribeEffectiveInstanceAssociationsResponse
     */
    public function describeEffectiveInstanceAssociations(DescribeEffectiveInstanceAssociationsRequest $args)
    {
        $result = parent::describeEffectiveInstanceAssociations($args->toArray());
        return new DescribeEffectiveInstanceAssociationsResponse($result->toArray());
    }
}
