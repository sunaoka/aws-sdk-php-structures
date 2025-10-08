<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeExportConfigurations;

trait DescribeExportConfigurationsTrait
{
    /**
     * @param DescribeExportConfigurationsRequest $args
     * @return DescribeExportConfigurationsResponse
     */
    public function describeExportConfigurations(DescribeExportConfigurationsRequest $args)
    {
        $result = parent::describeExportConfigurations($args->toArray());
        return new DescribeExportConfigurationsResponse($result->toArray());
    }
}
