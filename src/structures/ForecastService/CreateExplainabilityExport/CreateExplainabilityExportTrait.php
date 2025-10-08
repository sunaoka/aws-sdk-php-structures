<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateExplainabilityExport;

trait CreateExplainabilityExportTrait
{
    /**
     * @param CreateExplainabilityExportRequest $args
     * @return CreateExplainabilityExportResponse
     */
    public function createExplainabilityExport(CreateExplainabilityExportRequest $args)
    {
        $result = parent::createExplainabilityExport($args->toArray());
        return new CreateExplainabilityExportResponse($result->toArray());
    }
}
