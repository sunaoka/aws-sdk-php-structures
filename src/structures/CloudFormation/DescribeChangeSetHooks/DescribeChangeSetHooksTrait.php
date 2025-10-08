<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSetHooks;

trait DescribeChangeSetHooksTrait
{
    /**
     * @param DescribeChangeSetHooksRequest $args
     * @return DescribeChangeSetHooksResponse
     */
    public function describeChangeSetHooks(DescribeChangeSetHooksRequest $args)
    {
        $result = parent::describeChangeSetHooks($args->toArray());
        return new DescribeChangeSetHooksResponse($result->toArray());
    }
}
