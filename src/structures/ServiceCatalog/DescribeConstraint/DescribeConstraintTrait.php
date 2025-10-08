<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeConstraint;

trait DescribeConstraintTrait
{
    /**
     * @param DescribeConstraintRequest $args
     * @return DescribeConstraintResponse
     */
    public function describeConstraint(DescribeConstraintRequest $args)
    {
        $result = parent::describeConstraint($args->toArray());
        return new DescribeConstraintResponse($result->toArray());
    }
}
