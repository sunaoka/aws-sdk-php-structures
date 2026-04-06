<?php

namespace Sunaoka\Aws\Structures\PrometheusService\PutAnomalyDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $anomalyDetectorId
 * @property int<30, 86400>|null $evaluationIntervalInSeconds
 * @property Shapes\AnomalyDetectorMissingDataAction|null $missingDataAction
 * @property Shapes\AnomalyDetectorConfiguration $configuration
 * @property array<string, string>|null $labels
 * @property string|null $clientToken
 */
class PutAnomalyDetectorRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     anomalyDetectorId: string,
     *     evaluationIntervalInSeconds?: int<30, 86400>|null,
     *     missingDataAction?: Shapes\AnomalyDetectorMissingDataAction|null,
     *     configuration: Shapes\AnomalyDetectorConfiguration,
     *     labels?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
