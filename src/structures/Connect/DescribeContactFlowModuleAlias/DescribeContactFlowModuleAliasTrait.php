<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactFlowModuleAlias;

trait DescribeContactFlowModuleAliasTrait
{
    /**
     * @param DescribeContactFlowModuleAliasRequest $args
     * @return DescribeContactFlowModuleAliasResponse
     */
    public function describeContactFlowModuleAlias(DescribeContactFlowModuleAliasRequest $args)
    {
        $result = parent::describeContactFlowModuleAlias($args->toArray());
        return new DescribeContactFlowModuleAliasResponse($result->toArray());
    }
}
