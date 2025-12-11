<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateAnomalyDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $alias
 * @property int<30, 86400>|null $evaluationIntervalInSeconds
 * @property Shapes\AnomalyDetectorMissingDataAction|null $missingDataAction
 * @property Shapes\AnomalyDetectorConfiguration $configuration
 * @property array<string, string>|null $labels
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateAnomalyDetectorRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     alias: string,
     *     evaluationIntervalInSeconds?: int<30, 86400>|null,
     *     missingDataAction?: Shapes\AnomalyDetectorMissingDataAction|null,
     *     configuration: Shapes\AnomalyDetectorConfiguration,
     *     labels?: array<string, string>|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
