<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeProvisioningTemplate;

trait DescribeProvisioningTemplateTrait
{
    /**
     * @param DescribeProvisioningTemplateRequest $args
     * @return DescribeProvisioningTemplateResponse
     */
    public function describeProvisioningTemplate(DescribeProvisioningTemplateRequest $args)
    {
        $result = parent::describeProvisioningTemplate($args->toArray());
        return new DescribeProvisioningTemplateResponse($result->toArray());
    }
}
