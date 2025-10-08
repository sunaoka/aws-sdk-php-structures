<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeWorldTemplate;

trait DescribeWorldTemplateTrait
{
    /**
     * @param DescribeWorldTemplateRequest $args
     * @return DescribeWorldTemplateResponse
     */
    public function describeWorldTemplate(DescribeWorldTemplateRequest $args)
    {
        $result = parent::describeWorldTemplate($args->toArray());
        return new DescribeWorldTemplateResponse($result->toArray());
    }
}
