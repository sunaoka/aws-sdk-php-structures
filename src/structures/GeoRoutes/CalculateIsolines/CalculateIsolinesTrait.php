<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines;

trait CalculateIsolinesTrait
{
    /**
     * @param CalculateIsolinesRequest $args
     * @return CalculateIsolinesResponse
     */
    public function calculateIsolines(CalculateIsolinesRequest $args)
    {
        $result = parent::calculateIsolines($args->toArray());
        return new CalculateIsolinesResponse($result->toArray());
    }
}
