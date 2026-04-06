<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeGeneratedTemplate;

trait DescribeGeneratedTemplateTrait
{
    /**
     * @param DescribeGeneratedTemplateRequest $args
     * @return DescribeGeneratedTemplateResponse
     */
    public function describeGeneratedTemplate(DescribeGeneratedTemplateRequest $args)
    {
        $result = parent::describeGeneratedTemplate($args->toArray());
        return new DescribeGeneratedTemplateResponse($result->toArray());
    }
}
