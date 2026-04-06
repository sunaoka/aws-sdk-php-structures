<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\CreatePracticeRunConfiguration;

trait CreatePracticeRunConfigurationTrait
{
    /**
     * @param CreatePracticeRunConfigurationRequest $args
     * @return CreatePracticeRunConfigurationResponse
     */
    public function createPracticeRunConfiguration(CreatePracticeRunConfigurationRequest $args)
    {
        $result = parent::createPracticeRunConfiguration($args->toArray());
        return new CreatePracticeRunConfigurationResponse($result->toArray());
    }
}
