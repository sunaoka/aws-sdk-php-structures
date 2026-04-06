<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestConfigurations;

trait ListTestConfigurationsTrait
{
    /**
     * @param ListTestConfigurationsRequest $args
     * @return ListTestConfigurationsResponse
     */
    public function listTestConfigurations(ListTestConfigurationsRequest $args)
    {
        $result = parent::listTestConfigurations($args->toArray());
        return new ListTestConfigurationsResponse($result->toArray());
    }
}
