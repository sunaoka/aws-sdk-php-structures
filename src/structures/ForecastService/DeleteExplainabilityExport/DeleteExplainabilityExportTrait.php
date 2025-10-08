<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeleteExplainabilityExport;

trait DeleteExplainabilityExportTrait
{
    /**
     * @param DeleteExplainabilityExportRequest $args
     * @return void
     */
    public function deleteExplainabilityExport(DeleteExplainabilityExportRequest $args)
    {
        parent::deleteExplainabilityExport($args->toArray());
    }
}
