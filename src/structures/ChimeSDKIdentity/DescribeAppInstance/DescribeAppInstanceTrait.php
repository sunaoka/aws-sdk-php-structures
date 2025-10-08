<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DescribeAppInstance;

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
