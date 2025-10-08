<?php

namespace Sunaoka\Aws\Structures\CostandUsageReportService\ModifyReportDefinition;

trait ModifyReportDefinitionTrait
{
    /**
     * @param ModifyReportDefinitionRequest $args
     * @return ModifyReportDefinitionResponse
     */
    public function modifyReportDefinition(ModifyReportDefinitionRequest $args)
    {
        $result = parent::modifyReportDefinition($args->toArray());
        return new ModifyReportDefinitionResponse($result->toArray());
    }
}
