<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\StartStudioSSOConfigurationRepair;

trait StartStudioSSOConfigurationRepairTrait
{
    /**
     * @param StartStudioSSOConfigurationRepairRequest $args
     * @return StartStudioSSOConfigurationRepairResponse
     */
    public function startStudioSSOConfigurationRepair(StartStudioSSOConfigurationRepairRequest $args)
    {
        $result = parent::startStudioSSOConfigurationRepair($args->toArray());
        return new StartStudioSSOConfigurationRepairResponse($result->toArray());
    }
}
