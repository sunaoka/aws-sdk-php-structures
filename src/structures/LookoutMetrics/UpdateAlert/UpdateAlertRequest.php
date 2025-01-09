<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\UpdateAlert;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AlertArn
 * @property string $AlertDescription
 * @property int $AlertSensitivityThreshold
 * @property Shapes\Action $Action
 * @property Shapes\AlertFilters $AlertFilters
 */
class UpdateAlertRequest extends Request
{
    /**
     * @param array{
     *     AlertArn: string,
     *     AlertDescription?: string,
     *     AlertSensitivityThreshold?: int,
     *     Action?: Shapes\Action,
     *     AlertFilters?: Shapes\AlertFilters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
