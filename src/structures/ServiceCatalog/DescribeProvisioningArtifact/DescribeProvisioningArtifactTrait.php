<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisioningArtifact;

trait DescribeProvisioningArtifactTrait
{
    /**
     * @param DescribeProvisioningArtifactRequest $args
     * @return DescribeProvisioningArtifactResponse
     */
    public function describeProvisioningArtifact(DescribeProvisioningArtifactRequest $args)
    {
        $result = parent::describeProvisioningArtifact($args->toArray());
        return new DescribeProvisioningArtifactResponse($result->toArray());
    }
}
