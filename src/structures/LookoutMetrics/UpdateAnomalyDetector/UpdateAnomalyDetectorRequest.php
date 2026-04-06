<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\UpdateAnomalyDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 * @property string|null $KmsKeyArn
 * @property string|null $AnomalyDetectorDescription
 * @property Shapes\AnomalyDetectorConfig|null $AnomalyDetectorConfig
 */
class UpdateAnomalyDetectorRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorArn: string,
     *     KmsKeyArn?: string|null,
     *     AnomalyDetectorDescription?: string|null,
     *     AnomalyDetectorConfig?: Shapes\AnomalyDetectorConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
