<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeUpdate;

trait DescribeUpdateTrait
{
    /**
     * @param DescribeUpdateRequest $args
     * @return DescribeUpdateResponse
     */
    public function describeUpdate(DescribeUpdateRequest $args)
    {
        $result = parent::describeUpdate($args->toArray());
        return new DescribeUpdateResponse($result->toArray());
    }
}
