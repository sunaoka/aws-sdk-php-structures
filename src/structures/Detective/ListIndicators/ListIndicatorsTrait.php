<?php

namespace Sunaoka\Aws\Structures\Detective\ListIndicators;

trait ListIndicatorsTrait
{
    /**
     * @param ListIndicatorsRequest $args
     * @return ListIndicatorsResponse
     */
    public function listIndicators(ListIndicatorsRequest $args)
    {
        $result = parent::listIndicators($args->toArray());
        return new ListIndicatorsResponse($result->toArray());
    }
}
