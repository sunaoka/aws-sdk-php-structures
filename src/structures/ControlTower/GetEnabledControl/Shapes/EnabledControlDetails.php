<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetEnabledControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $controlIdentifier
 * @property DriftStatusSummary $driftStatusSummary
 * @property list<EnabledControlParameterSummary> $parameters
 * @property EnablementStatusSummary $statusSummary
 * @property string $targetIdentifier
 * @property list<Region> $targetRegions
 */
class EnabledControlDetails extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     controlIdentifier?: string,
     *     driftStatusSummary?: DriftStatusSummary,
     *     parameters?: list<EnabledControlParameterSummary>,
     *     statusSummary?: EnablementStatusSummary,
     *     targetIdentifier?: string,
     *     targetRegions?: list<Region>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
