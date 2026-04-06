<?php

namespace Sunaoka\Aws\Structures\PrometheusService\PutAnomalyDetector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $anomalyDetectorId
 * @property string $arn
 * @property Shapes\AnomalyDetectorStatus $status
 * @property array<string, string>|null $tags
 */
class PutAnomalyDetectorResponse extends Response
{
}
