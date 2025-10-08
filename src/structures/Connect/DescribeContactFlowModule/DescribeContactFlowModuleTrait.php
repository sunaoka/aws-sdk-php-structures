<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactFlowModule;

trait DescribeContactFlowModuleTrait
{
    /**
     * @param DescribeContactFlowModuleRequest $args
     * @return DescribeContactFlowModuleResponse
     */
    public function describeContactFlowModule(DescribeContactFlowModuleRequest $args)
    {
        $result = parent::describeContactFlowModule($args->toArray());
        return new DescribeContactFlowModuleResponse($result->toArray());
    }
}
