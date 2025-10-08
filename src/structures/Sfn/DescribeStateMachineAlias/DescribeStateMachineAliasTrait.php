<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeStateMachineAlias;

trait DescribeStateMachineAliasTrait
{
    /**
     * @param DescribeStateMachineAliasRequest $args
     * @return DescribeStateMachineAliasResponse
     */
    public function describeStateMachineAlias(DescribeStateMachineAliasRequest $args)
    {
        $result = parent::describeStateMachineAlias($args->toArray());
        return new DescribeStateMachineAliasResponse($result->toArray());
    }
}
