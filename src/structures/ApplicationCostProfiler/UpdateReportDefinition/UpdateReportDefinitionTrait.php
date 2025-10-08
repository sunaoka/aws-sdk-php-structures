<?php

namespace Sunaoka\Aws\Structures\ApplicationCostProfiler\UpdateReportDefinition;

trait UpdateReportDefinitionTrait
{
    /**
     * @param UpdateReportDefinitionRequest $args
     * @return UpdateReportDefinitionResponse
     */
    public function updateReportDefinition(UpdateReportDefinitionRequest $args)
    {
        $result = parent::updateReportDefinition($args->toArray());
        return new UpdateReportDefinitionResponse($result->toArray());
    }
}
