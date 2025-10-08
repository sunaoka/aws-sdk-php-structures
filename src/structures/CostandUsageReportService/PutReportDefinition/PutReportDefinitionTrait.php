<?php

namespace Sunaoka\Aws\Structures\CostandUsageReportService\PutReportDefinition;

trait PutReportDefinitionTrait
{
    /**
     * @param PutReportDefinitionRequest $args
     * @return PutReportDefinitionResponse
     */
    public function putReportDefinition(PutReportDefinitionRequest $args)
    {
        $result = parent::putReportDefinition($args->toArray());
        return new PutReportDefinitionResponse($result->toArray());
    }
}
