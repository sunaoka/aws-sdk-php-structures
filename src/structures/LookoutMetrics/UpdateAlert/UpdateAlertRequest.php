<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\UpdateAlert;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AlertArn
 * @property string|null $AlertDescription
 * @property int<0, 100>|null $AlertSensitivityThreshold
 * @property Shapes\Action|null $Action
 * @property Shapes\AlertFilters|null $AlertFilters
 */
class UpdateAlertRequest extends Request
{
    /**
     * @param array{
     *     AlertArn: string,
     *     AlertDescription?: string|null,
     *     AlertSensitivityThreshold?: int<0, 100>|null,
     *     Action?: Shapes\Action|null,
     *     AlertFilters?: Shapes\AlertFilters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
