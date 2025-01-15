<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\CreateAnomalyDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorName
 * @property string|null $AnomalyDetectorDescription
 * @property Shapes\AnomalyDetectorConfig $AnomalyDetectorConfig
 * @property string|null $KmsKeyArn
 * @property array<string, string>|null $Tags
 */
class CreateAnomalyDetectorRequest extends Request
{
    /**
     * @param array{
     *     AnomalyDetectorName: string,
     *     AnomalyDetectorDescription?: string|null,
     *     AnomalyDetectorConfig: Shapes\AnomalyDetectorConfig,
     *     KmsKeyArn?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
