<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DetectMetricSetConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 * @property Shapes\AutoDetectionMetricSource $AutoDetectionMetricSource
 */
class DetectMetricSetConfigRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn: string,
     *     AutoDetectionMetricSource: Shapes\AutoDetectionMetricSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
