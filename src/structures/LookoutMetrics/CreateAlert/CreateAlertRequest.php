<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\CreateAlert;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AlertName
 * @property int<0, 100> $AlertSensitivityThreshold
 * @property string $AlertDescription
 * @property string $AnomalyDetectorArn
 * @property Shapes\Action $Action
 * @property array<string, string> $Tags
 * @property Shapes\AlertFilters $AlertFilters
 */
class CreateAlertRequest extends Request
{
    /**
     * @param array{
     *     AlertName: string,
     *     AlertSensitivityThreshold?: int<0, 100>,
     *     AlertDescription?: string,
     *     AnomalyDetectorArn: string,
     *     Action: Shapes\Action,
     *     Tags?: array<string, string>,
     *     AlertFilters?: Shapes\AlertFilters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
