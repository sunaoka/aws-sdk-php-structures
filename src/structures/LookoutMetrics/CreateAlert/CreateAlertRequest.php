<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\CreateAlert;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AlertName
 * @property int<0, 100>|null $AlertSensitivityThreshold
 * @property string|null $AlertDescription
 * @property string $AnomalyDetectorArn
 * @property Shapes\Action $Action
 * @property array<string, string>|null $Tags
 * @property Shapes\AlertFilters|null $AlertFilters
 */
class CreateAlertRequest extends Request
{
    /**
     * @param array{
     *     AlertName: string,
     *     AlertSensitivityThreshold?: int<0, 100>|null,
     *     AlertDescription?: string|null,
     *     AnomalyDetectorArn: string,
     *     Action: Shapes\Action,
     *     Tags?: array<string, string>|null,
     *     AlertFilters?: Shapes\AlertFilters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
