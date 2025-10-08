<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListExplainabilityExports;

trait ListExplainabilityExportsTrait
{
    /**
     * @param ListExplainabilityExportsRequest $args
     * @return ListExplainabilityExportsResponse
     */
    public function listExplainabilityExports(ListExplainabilityExportsRequest $args)
    {
        $result = parent::listExplainabilityExports($args->toArray());
        return new ListExplainabilityExportsResponse($result->toArray());
    }
}
