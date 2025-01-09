<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\UpdateAnomalyDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 * @property string $KmsKeyArn
 * @property string $AnomalyDetectorDescription
 * @property Shapes\AnomalyDetectorConfig $AnomalyDetectorConfig
 */
class UpdateAnomalyDetectorRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn: string,
     *     KmsKeyArn?: string,
     *     AnomalyDetectorDescription?: string,
     *     AnomalyDetectorConfig?: Shapes\AnomalyDetectorConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
