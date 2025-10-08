<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJobTemplate;

trait DescribeJobTemplateTrait
{
    /**
     * @param DescribeJobTemplateRequest $args
     * @return DescribeJobTemplateResponse
     */
    public function describeJobTemplate(DescribeJobTemplateRequest $args)
    {
        $result = parent::describeJobTemplate($args->toArray());
        return new DescribeJobTemplateResponse($result->toArray());
    }
}
