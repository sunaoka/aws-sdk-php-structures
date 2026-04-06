<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $controlIdentifier
 * @property string|null $targetIdentifier
 * @property EnablementStatusSummary|null $statusSummary
 * @property DriftStatusSummary|null $driftStatusSummary
 * @property string|null $parentIdentifier
 */
class EnabledControlSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     controlIdentifier?: string|null,
     *     targetIdentifier?: string|null,
     *     statusSummary?: EnablementStatusSummary|null,
     *     driftStatusSummary?: DriftStatusSummary|null,
     *     parentIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
