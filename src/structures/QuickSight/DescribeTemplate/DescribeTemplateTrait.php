<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplate;

trait DescribeTemplateTrait
{
    /**
     * @param DescribeTemplateRequest $args
     * @return DescribeTemplateResponse
     */
    public function describeTemplate(DescribeTemplateRequest $args)
    {
        $result = parent::describeTemplate($args->toArray());
        return new DescribeTemplateResponse($result->toArray());
    }
}
