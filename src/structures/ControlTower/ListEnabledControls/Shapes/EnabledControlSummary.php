<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $controlIdentifier
 * @property DriftStatusSummary $driftStatusSummary
 * @property EnablementStatusSummary $statusSummary
 * @property string $targetIdentifier
 */
class EnabledControlSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     controlIdentifier?: string,
     *     driftStatusSummary?: DriftStatusSummary,
     *     statusSummary?: EnablementStatusSummary,
     *     targetIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
