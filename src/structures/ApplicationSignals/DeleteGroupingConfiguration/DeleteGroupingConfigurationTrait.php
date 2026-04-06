<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\DeleteGroupingConfiguration;

trait DeleteGroupingConfigurationTrait
{
    /**
     * @return DeleteGroupingConfigurationResponse
     */
    public function deleteGroupingConfiguration()
    {
        $result = parent::deleteGroupingConfiguration();
        return new DeleteGroupingConfigurationResponse($result->toArray());
    }
}
