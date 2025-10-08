<?php

namespace Sunaoka\Aws\Structures\Schemas\DescribeCodeBinding;

trait DescribeCodeBindingTrait
{
    /**
     * @param DescribeCodeBindingRequest $args
     * @return DescribeCodeBindingResponse
     */
    public function describeCodeBinding(DescribeCodeBindingRequest $args)
    {
        $result = parent::describeCodeBinding($args->toArray());
        return new DescribeCodeBindingResponse($result->toArray());
    }
}
