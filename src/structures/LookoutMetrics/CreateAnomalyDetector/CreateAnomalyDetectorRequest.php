<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\CreateAnomalyDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorName
 * @property string $AnomalyDetectorDescription
 * @property Shapes\AnomalyDetectorConfig $AnomalyDetectorConfig
 * @property string $KmsKeyArn
 * @property array<string, string> $Tags
 */
class CreateAnomalyDetectorRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorName: string,
     *     AnomalyDetectorDescription?: string,
     *     AnomalyDetectorConfig: Shapes\AnomalyDetectorConfig,
     *     KmsKeyArn?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
