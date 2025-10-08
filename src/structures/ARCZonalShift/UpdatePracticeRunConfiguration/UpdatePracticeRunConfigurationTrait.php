<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\UpdatePracticeRunConfiguration;

trait UpdatePracticeRunConfigurationTrait
{
    /**
     * @param UpdatePracticeRunConfigurationRequest $args
     * @return UpdatePracticeRunConfigurationResponse
     */
    public function updatePracticeRunConfiguration(UpdatePracticeRunConfigurationRequest $args)
    {
        $result = parent::updatePracticeRunConfiguration($args->toArray());
        return new UpdatePracticeRunConfigurationResponse($result->toArray());
    }
}
