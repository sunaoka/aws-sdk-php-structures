<?php

namespace Sunaoka\Aws\Structures\ApplicationCostProfiler\ListReportDefinitions;

trait ListReportDefinitionsTrait
{
    /**
     * @param ListReportDefinitionsRequest $args
     * @return ListReportDefinitionsResponse
     */
    public function listReportDefinitions(ListReportDefinitionsRequest $args)
    {
        $result = parent::listReportDefinitions($args->toArray());
        return new ListReportDefinitionsResponse($result->toArray());
    }
}
