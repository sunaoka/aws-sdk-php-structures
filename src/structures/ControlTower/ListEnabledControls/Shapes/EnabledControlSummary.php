<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $controlIdentifier
 * @property DriftStatusSummary|null $driftStatusSummary
 * @property EnablementStatusSummary|null $statusSummary
 * @property string|null $targetIdentifier
 */
class EnabledControlSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     controlIdentifier?: string|null,
     *     driftStatusSummary?: DriftStatusSummary|null,
     *     statusSummary?: EnablementStatusSummary|null,
     *     targetIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
