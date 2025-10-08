<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListExplainabilities;

trait ListExplainabilitiesTrait
{
    /**
     * @param ListExplainabilitiesRequest $args
     * @return ListExplainabilitiesResponse
     */
    public function listExplainabilities(ListExplainabilitiesRequest $args)
    {
        $result = parent::listExplainabilities($args->toArray());
        return new ListExplainabilitiesResponse($result->toArray());
    }
}
