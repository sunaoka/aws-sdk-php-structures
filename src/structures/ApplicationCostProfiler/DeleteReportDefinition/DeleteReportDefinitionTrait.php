<?php

namespace Sunaoka\Aws\Structures\ApplicationCostProfiler\DeleteReportDefinition;

trait DeleteReportDefinitionTrait
{
    /**
     * @param DeleteReportDefinitionRequest $args
     * @return DeleteReportDefinitionResponse
     */
    public function deleteReportDefinition(DeleteReportDefinitionRequest $args)
    {
        $result = parent::deleteReportDefinition($args->toArray());
        return new DeleteReportDefinitionResponse($result->toArray());
    }
}
