<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListVpcConfigurations;

trait ListVpcConfigurationsTrait
{
    /**
     * @param ListVpcConfigurationsRequest $args
     * @return ListVpcConfigurationsResponse
     */
    public function listVpcConfigurations(ListVpcConfigurationsRequest $args)
    {
        $result = parent::listVpcConfigurations($args->toArray());
        return new ListVpcConfigurationsResponse($result->toArray());
    }
}
