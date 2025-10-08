<?php

namespace Sunaoka\Aws\Structures\ApplicationCostProfiler\GetReportDefinition;

trait GetReportDefinitionTrait
{
    /**
     * @param GetReportDefinitionRequest $args
     * @return GetReportDefinitionResponse
     */
    public function getReportDefinition(GetReportDefinitionRequest $args)
    {
        $result = parent::getReportDefinition($args->toArray());
        return new GetReportDefinitionResponse($result->toArray());
    }
}
