<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\DeletePracticeRunConfiguration;

trait DeletePracticeRunConfigurationTrait
{
    /**
     * @param DeletePracticeRunConfigurationRequest $args
     * @return DeletePracticeRunConfigurationResponse
     */
    public function deletePracticeRunConfiguration(DeletePracticeRunConfigurationRequest $args)
    {
        $result = parent::deletePracticeRunConfiguration($args->toArray());
        return new DeletePracticeRunConfigurationResponse($result->toArray());
    }
}
