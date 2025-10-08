<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeAppVersionTemplate;

trait DescribeAppVersionTemplateTrait
{
    /**
     * @param DescribeAppVersionTemplateRequest $args
     * @return DescribeAppVersionTemplateResponse
     */
    public function describeAppVersionTemplate(DescribeAppVersionTemplateRequest $args)
    {
        $result = parent::describeAppVersionTemplate($args->toArray());
        return new DescribeAppVersionTemplateResponse($result->toArray());
    }
}
