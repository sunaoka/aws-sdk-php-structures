<?php

namespace Sunaoka\Aws\Structures\WorkMail\TestAvailabilityConfiguration;

trait TestAvailabilityConfigurationTrait
{
    /**
     * @param TestAvailabilityConfigurationRequest $args
     * @return TestAvailabilityConfigurationResponse
     */
    public function testAvailabilityConfiguration(TestAvailabilityConfigurationRequest $args)
    {
        $result = parent::testAvailabilityConfiguration($args->toArray());
        return new TestAvailabilityConfigurationResponse($result->toArray());
    }
}
