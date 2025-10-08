<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition;

trait DescribeTemplateDefinitionTrait
{
    /**
     * @param DescribeTemplateDefinitionRequest $args
     * @return DescribeTemplateDefinitionResponse
     */
    public function describeTemplateDefinition(DescribeTemplateDefinitionRequest $args)
    {
        $result = parent::describeTemplateDefinition($args->toArray());
        return new DescribeTemplateDefinitionResponse($result->toArray());
    }
}
