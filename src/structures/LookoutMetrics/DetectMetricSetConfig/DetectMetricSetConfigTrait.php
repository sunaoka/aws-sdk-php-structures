<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DetectMetricSetConfig;

trait DetectMetricSetConfigTrait
{
    /**
     * @param DetectMetricSetConfigRequest $args
     * @return DetectMetricSetConfigResponse
     */
    public function detectMetricSetConfig(DetectMetricSetConfigRequest $args)
    {
        $result = parent::detectMetricSetConfig($args->toArray());
        return new DetectMetricSetConfigResponse($result->toArray());
    }
}
