<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeProvisioningTemplateVersion;

trait DescribeProvisioningTemplateVersionTrait
{
    /**
     * @param DescribeProvisioningTemplateVersionRequest $args
     * @return DescribeProvisioningTemplateVersionResponse
     */
    public function describeProvisioningTemplateVersion(DescribeProvisioningTemplateVersionRequest $args)
    {
        $result = parent::describeProvisioningTemplateVersion($args->toArray());
        return new DescribeProvisioningTemplateVersionResponse($result->toArray());
    }
}
