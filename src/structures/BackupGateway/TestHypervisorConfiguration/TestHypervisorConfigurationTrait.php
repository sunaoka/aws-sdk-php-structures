<?php

namespace Sunaoka\Aws\Structures\BackupGateway\TestHypervisorConfiguration;

trait TestHypervisorConfigurationTrait
{
    /**
     * @param TestHypervisorConfigurationRequest $args
     * @return TestHypervisorConfigurationResponse
     */
    public function testHypervisorConfiguration(TestHypervisorConfigurationRequest $args)
    {
        $result = parent::testHypervisorConfiguration($args->toArray());
        return new TestHypervisorConfigurationResponse($result->toArray());
    }
}
