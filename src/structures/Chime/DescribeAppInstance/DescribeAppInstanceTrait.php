<?php

namespace Sunaoka\Aws\Structures\Chime\DescribeAppInstance;

trait DescribeAppInstanceTrait
{
    /**
     * @param DescribeAppInstanceRequest $args
     * @return DescribeAppInstanceResponse
     */
    public function describeAppInstance(DescribeAppInstanceRequest $args)
    {
        $result = parent::describeAppInstance($args->toArray());
        return new DescribeAppInstanceResponse($result->toArray());
    }
}
