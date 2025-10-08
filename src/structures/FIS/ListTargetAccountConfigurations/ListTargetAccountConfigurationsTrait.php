<?php

namespace Sunaoka\Aws\Structures\FIS\ListTargetAccountConfigurations;

trait ListTargetAccountConfigurationsTrait
{
    /**
     * @param ListTargetAccountConfigurationsRequest $args
     * @return ListTargetAccountConfigurationsResponse
     */
    public function listTargetAccountConfigurations(ListTargetAccountConfigurationsRequest $args)
    {
        $result = parent::listTargetAccountConfigurations($args->toArray());
        return new ListTargetAccountConfigurationsResponse($result->toArray());
    }
}
