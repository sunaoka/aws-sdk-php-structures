<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeConversionConfiguration;

trait DescribeConversionConfigurationTrait
{
    /**
     * @param DescribeConversionConfigurationRequest $args
     * @return DescribeConversionConfigurationResponse
     */
    public function describeConversionConfiguration(DescribeConversionConfigurationRequest $args)
    {
        $result = parent::describeConversionConfiguration($args->toArray());
        return new DescribeConversionConfigurationResponse($result->toArray());
    }
}
