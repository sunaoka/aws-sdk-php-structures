<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactFlowAlias;

trait DescribeContactFlowAliasTrait
{
    /**
     * @param DescribeContactFlowAliasRequest $args
     * @return DescribeContactFlowAliasResponse
     */
    public function describeContactFlowAlias(DescribeContactFlowAliasRequest $args)
    {
        $result = parent::describeContactFlowAlias($args->toArray());
        return new DescribeContactFlowAliasResponse($result->toArray());
    }
}
